<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\CourseCategory;
use App\Models\CourseSpecialization;
use App\Models\DefaultOgImage;
use App\Models\DynamicPageSeo;
use App\Models\Exam;
use App\Models\Scholarship;
use App\Models\Service;
use App\Models\StaticPageSeo;
use App\Models\University;
use Illuminate\Support\Facades\Log;

class SeoMetaService
{
    /**
     * Resolve SEO meta data for a given URL path
     * 
     * @param string $path - The URL path (e.g., "university/abc" or "blog/category/slug-123")
     * @return array - Associative array with meta data
     */
    public static function resolve(string $path): array
    {
        // Remove leading/trailing slashes
        $path = trim($path, '/');
        
        // Default fallback values
        $defaults = self::getDefaults();
        
        // Try to match URL patterns and fetch entity-specific meta
        $meta = null;
        
        // Pattern: university/{slug}/courses/{course_slug}
        if (preg_match('#^university/([^/]+)/courses/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveUniversityCourse($matches[1], $matches[2]);
        }
        // Pattern: university/{slug}/{section}
        elseif (preg_match('#^university/([^/]+)/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveUniversity($matches[1], $matches[2]);
        }
        // Pattern: university/{slug}
        elseif (preg_match('#^university/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveUniversity($matches[1]);
        }
        // Pattern: universities/{type}/{pageSlug}
        elseif (preg_match('#^universities/([^/]+)/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveUniversityType($matches[1], $matches[2]);
        }
        // Pattern: universities/{type}
        elseif (preg_match('#^universities/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveUniversityType($matches[1]);
        }
        // Pattern: blog/{category}/{slug}
        elseif (preg_match('#^blog/([^/]+)/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveBlog($matches[1], $matches[2]);
        }
        // Pattern: blog/{category}
        elseif (preg_match('#^blog/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveBlogCategory($matches[1]);
        }
        // Pattern: course/{slug}
        elseif (preg_match('#^course/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveCourseCategory($matches[1]);
        }
        // Pattern: specialization/{slug}
        elseif (preg_match('#^specialization/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveSpecialization($matches[1]);
        }
        // Pattern: courses-in-malaysia or {filter}-courses
        elseif (preg_match('#^courses-in-malaysia#', $path) || preg_match('#^([^/]+)-courses$#', $path)) {
            $meta = self::resolveCourses($path);
        }
        // Pattern: resources/exams/{slug}
        elseif (preg_match('#^resources/exams/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveExam($matches[1]);
        }
        // Pattern: resources/services/{slug}
        elseif (preg_match('#^resources/services/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveService($matches[1]);
        }
        // Pattern: scholarships/{slug}
        elseif (preg_match('#^scholarships/([^/]+)$#', $path, $matches)) {
            $meta = self::resolveScholarship($matches[1]);
        }
        // Static pages
        else {
            $meta = self::resolveStaticPage($path);
        }
        
        // Merge with defaults (entity meta takes precedence)
        return array_merge($defaults, array_filter($meta ?? []));
    }
    
    /**
     * Get default fallback meta values
     */
    private static function getDefaults(): array
    {
        $defaultOgImage = DefaultOgImage::default()->first();
        $ogImagePath = $defaultOgImage 
            ? url('storage/' . ltrim($defaultOgImage->og_image_path, '/'))
            : url('/assets/web/images/education-malaysia-new-logo.png');
        
        return [
            'metaTitle' => 'Education Malaysia - Study in Malaysia',
            'metaDescription' => 'Explore top universities, courses, and scholarships in Malaysia. Get expert guidance for your study abroad journey.',
            'metaKeywords' => 'study in malaysia, universities in malaysia, courses in malaysia',
            'canonical' => url()->current(),
            'ogImage' => $ogImagePath,
            'ogType' => 'website',
            'robots' => 'index, follow',
            'notFound' => false,
        ];
    }
    
    /**
     * Resolve meta for university detail page (supports sections)
     */
    private static function resolveUniversity(string $slug, string $section = 'overview'): ?array
    {
        $university = University::where('uname', $slug)->first();
        
        if (!$university) {
            return ['notFound' => true];
        }
        
        // Map sections to DynamicPageSeo urls
        $sectionMap = [
            'overview' => 'university',
            'courses' => 'university-course-list',
            'gallery' => 'gallery',
            'videos' => 'video',
            'ranking' => 'university-ranking',
            'reviews' => 'review-page',
        ];
        
        $dseoUrl = $sectionMap[$section] ?? 'university';
        $dseo = DynamicPageSeo::where('url', $dseoUrl)->first();
        
        $tagArray = [
            'title' => $university->name,
            'address' => $university->city ?? '',
            'shortnote' => $university->shortnote ?? '',
            'universitytype' => $university->instituteType->type ?? '',
            'universityname' => $university->name,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        // Some templates might expect slightly different keys
        if ($section === 'courses') {
            $tagArray['university'] = $university->name;
            $tagArray['noc'] = $university->programs_count ?? '';
        }
        
        $metaTitle = $university->meta_title ?: ($dseo->meta_title ?? '');
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaDescription = $university->meta_description ?: ($dseo->meta_description ?? '');
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        $metaKeywords = $university->meta_keyword ?: ($dseo->meta_keyword ?? '');
        $metaKeywords = replaceTag($metaKeywords, $tagArray);
        
        $ogImage = $university->og_image_path 
            ? url('storage/' . ltrim($university->og_image_path, '/'))
            : ($dseo->og_image_path ? url('storage/' . ltrim($dseo->og_image_path, '/')) : null);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'canonical' => url('/university/' . $slug . ($section !== 'overview' ? '/' . $section : '')),
            'ogImage' => $ogImage,
            'ogType' => 'website',
        ];
    }

    /**
     * Resolve meta for university course detail page
     */
    private static function resolveUniversityCourse(string $uSlug, string $cSlug): ?array
    {
        $university = University::where('uname', $uSlug)->first();
        if (!$university) return ['notFound' => true];
        
        $program = \App\Models\UniversityProgram::where([
            'university_id' => $university->id,
            'slug' => $cSlug
        ])->first();
        
        if (!$program) return ['notFound' => true];
        
        $dseo = DynamicPageSeo::where('url', 'university-course-detail')->first();
        
        $tagArray = [
            'title' => $program->course_name,
            'universityname' => $university->name,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        $metaTitle = $program->meta_title ?: ($dseo->meta_title ?? '');
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaDescription = $program->meta_description ?: ($dseo->meta_description ?? '');
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $program->meta_keyword ?? '',
            'canonical' => url("/university/{$uSlug}/courses/{$cSlug}"),
            'ogImage' => $program->og_image_path ? url('storage/' . ltrim($program->og_image_path, '/')) : null,
            'ogType' => 'website',
        ];
    }
    
    /**
     * Resolve meta for university list by type or state
     */
    private static function resolveUniversityType(string $type, ?string $pageSlug = null): ?array
    {
        // 1. Parse the type slug - handle URLs like "private-institution-in-malaysia" or "private-institution-in-perak"
        $actualTypeSlug = $type;
        $stateFromUrl = null;
        
        // Check if the type contains "-in-" pattern (e.g., "private-institution-in-malaysia")
        if (str_contains($type, '-in-')) {
            $parts = explode('-in-', $type, 2);
            $actualTypeSlug = $parts[0]; // e.g., "private-institution"
            $stateFromUrl = $parts[1]; // e.g., "malaysia" or "perak"
        }
        
        // 2. Try to find institute type using the extracted slug
        $it = \App\Models\InstituteType::where('slug', $actualTypeSlug)
            ->orWhere('seo_title_slug', $actualTypeSlug)
            ->first();
        
        // If still not found and original type is "universities", it means all universities
        if (!$it && $actualTypeSlug === 'universities') {
            $typeName = null; // Will show "Universities" in template
        } else {
            $typeName = $it ? $it->type : ucwords(str_replace('-', ' ', $actualTypeSlug));
        }
        
        // 3. State handling - prioritize pageSlug, then stateFromUrl
        $stateName = null;
        if ($pageSlug) {
            $stateName = ucwords(str_replace('-', ' ', $pageSlug));
        } elseif ($stateFromUrl && $stateFromUrl !== 'malaysia') {
            $stateName = ucwords(str_replace('-', ' ', $stateFromUrl));
        }

        // 4. Get template
        $dseo = DynamicPageSeo::where('url', 'universities-in-malaysia')->first();
        
        $tagArray = [
            'institute_type' => $typeName ?? 'Universities',
            'state' => $stateName ?? 'Malaysia',
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        // 5. Count universities matching criteria
        $query = University::where('status', 1);
        if ($it) {
            $query->where('institute_type', $it->id);
        }
        if ($stateName) {
            $query->where('state', $stateName);
        }
        
        $tagArray['nou'] = $query->count();
        $tagArray['title'] = 'universities';

        $metaTitle = replaceTag($dseo->meta_title ?? 'Top %nou% Universities in Malaysia %currentyear%', $tagArray);
        $metaDescription = replaceTag($dseo->meta_description ?? 'Explore top universities in Malaysia', $tagArray);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $dseo->meta_keyword ?? '',
            'canonical' => url('/universities/' . $type . ($pageSlug ? '/' . $pageSlug : '')),
            'ogImage' => $dseo->og_image_path ? url('storage/' . ltrim($dseo->og_image_path, '/')) : null,
        ];
    }
    
    /**
     * Resolve meta for blog detail page
     */
    private static function resolveBlog(string $categorySlug, string $slugWithId): ?array
    {
        $category = BlogCategory::where('category_slug', $categorySlug)->first();
        
        if (!$category) {
            return ['notFound' => true];
        }
        
        // Extract blog ID from slug (format: slug-name-123)
        preg_match('/\d+$/', $slugWithId, $matches);
        $blogId = $matches[0] ?? null;
        $slug = preg_replace('/-\d+$/', '', $slugWithId);
        
        $blog = Blog::where('category_id', $category->id)
            ->where('slug', $slug)
            ->where('id', $blogId)
            ->active()
            ->first();
        
        if (!$blog) {
            return ['notFound' => true];
        }
        
        $dseo = DynamicPageSeo::where('url', 'blog-details')->first();
        
        $tagArray = [
            'title' => $blog->title,
            'category' => $category->category_name,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        $metaTitle = $blog->meta_title ?: ($dseo->meta_title ?? '');
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaDescription = $blog->meta_description ?: ($dseo->meta_description ?? '');
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        $metaKeywords = $blog->meta_keyword ?: ($dseo->meta_keyword ?? '');
        $metaKeywords = replaceTag($metaKeywords, $tagArray);
        
        $ogImage = $blog->thumbnail_path 
            ? url('storage/' . ltrim($blog->thumbnail_path, '/'))
            : ($dseo->og_image_path ? url('storage/' . ltrim($dseo->og_image_path, '/')) : null);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'canonical' => url('/blog/' . $categorySlug . '/' . $slugWithId),
            'ogImage' => $ogImage,
            'ogType' => 'article',
        ];
    }
    
    /**
     * Resolve meta for blog category page
     */
    private static function resolveBlogCategory(string $slug): ?array
    {
        $category = BlogCategory::where('category_slug', $slug)->first();
        
        if (!$category) {
            return null;
        }
        
        $dseo = DynamicPageSeo::where('url', 'blog-category-page')->first();
        
        $tagArray = [
            'category' => $category->category_name,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        $metaTitle = $category->meta_title ?: ($dseo->meta_title ?? '');
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaDescription = $category->meta_description ?: ($dseo->meta_description ?? '');
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $category->meta_keyword ?? '',
            'ogImage' => $category->og_image_path ? url('storage/' . ltrim($category->og_image_path, '/')) : null,
            'canonical' => url('/blog/' . $slug),
        ];
    }
    
    /**
     * Resolve meta for scholarship detail page
     */
    private static function resolveScholarship(string $slug): ?array
    {
        $scholarship = Scholarship::where('slug', $slug)->first();
        
        if (!$scholarship) {
            return ['notFound' => true];
        }
        
        $dseo = DynamicPageSeo::where('url', 'scholarship-detail-page')->first();
        
        $tagArray = [
            'title' => $scholarship->title,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        $metaTitle = $scholarship->meta_title ?: ($dseo->meta_title ?? '');
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaDescription = $scholarship->meta_description ?: ($dseo->meta_description ?? '');
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        $metaKeywords = $scholarship->meta_keyword ?: ($dseo->meta_keyword ?? '');
        $metaKeywords = replaceTag($metaKeywords, $tagArray);
        
        $ogImage = $scholarship->content_image_path 
            ? url('storage/' . ltrim($scholarship->content_image_path, '/'))
            : ($dseo->og_image_path ? url('storage/' . ltrim($dseo->og_image_path, '/')) : null);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'canonical' => url('/scholarships/' . $slug),
            'ogImage' => $ogImage,
            'ogType' => 'website',
        ];
    }
    
    /**
     * Resolve meta for course category page
     */
    private static function resolveCourseCategory(string $slug): ?array
    {
        $category = CourseCategory::where('slug', $slug)->first();
        
        if (!$category) {
            return ['notFound' => true];
        }
        
        $tagArray = [
            'title' => $category->name,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        $metaTitle = $category->meta_title ?: '';
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaDescription = $category->meta_description ?: '';
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $category->meta_keyword ?? '',
            'canonical' => url('/course/' . $slug),
        ];
    }
    
    /**
     * Resolve meta for specialization page
     */
    private static function resolveSpecialization(string $slug): ?array
    {
        $specialization = CourseSpecialization::where('slug', $slug)->first();
        
        if (!$specialization) {
            return ['notFound' => true];
        }
        
        $tagArray = [
            'title' => $specialization->name,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        $metaTitle = $specialization->meta_title ?: '';
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaDescription = $specialization->meta_description ?: '';
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $specialization->meta_keyword ?? '',
            'canonical' => url('/specialization/' . $slug),
        ];
    }
    
    /**
     * Resolve meta for exam page
     */
    private static function resolveExam(string $uri): ?array
    {
        $exam = Exam::where('uri', $uri)
            ->where('status', 1)
            ->first();
        
        if (!$exam) {
            return ['notFound' => true];
        }
        
        // Get dynamic template
        $dseo = DynamicPageSeo::where('url', 'exam-single-page')->first();
        
        $tagArray = [
            'title' => $exam->page_name,
            'headline' => $exam->headline,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        // Use exam's own meta or fallback to template
        $metaTitle = $exam->meta_title ?: ($dseo->meta_title ?? '');
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaKeyword = $exam->meta_keyword ?: ($dseo->meta_keyword ?? '');
        $metaKeyword = replaceTag($metaKeyword, $tagArray);
        
        $metaDescription = $exam->meta_description ?: ($dseo->meta_description ?? '');
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        $ogImage = null;
        if ($exam->imgpath) {
            $ogImage = url('storage/' . ltrim($exam->imgpath, '/'));
        } elseif ($dseo && $dseo->og_image_path) {
            $ogImage = url('storage/' . ltrim($dseo->og_image_path, '/'));
        }
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeyword,
            'canonical' => url('/resources/exams/' . $uri),
            'ogImage' => $ogImage,
        ];
    }
    
    /**
     * Resolve meta for service page
     */
    private static function resolveService(string $uri): ?array
    {
        $service = Service::where('uri', $uri)->first();
        
        if (!$service) {
            return ['notFound' => true];
        }
        
        $tagArray = [
            'title' => $service->name ?? '',
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        $metaTitle = $service->meta_title ?: '';
        $metaTitle = replaceTag($metaTitle, $tagArray);
        
        $metaDescription = $service->meta_description ?: '';
        $metaDescription = replaceTag($metaDescription, $tagArray);
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $service->meta_keyword ?? '',
            'canonical' => url('/resources/services/' . $uri),
        ];
    }
    
    /**
     * Resolve meta for static pages
     */
    private static function resolveStaticPage(string $path): ?array
    {
        // Map paths to page names
        $pageMap = [
            '' => 'home',
            'blog' => 'blog',
            'scholarships' => 'scholarships',
            'universities' => 'universities',
            'exams' => 'exams',
            'faqs' => 'faqs',
            'contact-us' => 'contact-us',
            'who-we-are' => 'who-we-are',
            'what-people-say' => 'what-students-say',
            'terms-and-conditions' => 'terms-conditions',
            'privacy-policy' => 'privacy-policy',
            'resources/services' => 'resources/services',
            'login' => 'login',
            'signup' => 'signup',
            'account/password/reset' => 'account/password/reset',
        ];
        
        $pageName = $pageMap[$path] ?? null;
        
        if (!$pageName) {
            return null; // Use defaults
        }
        
        $seo = StaticPageSeo::where('page', $pageName)->first();
        
        if (!$seo) {
            return null;
        }
        
        $tagArray = [
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
        ];
        
        $metaTitle = replaceTag($seo->meta_title ?? '', $tagArray);
        $metaDescription = replaceTag($seo->meta_description ?? '', $tagArray);
        $metaKeywords = replaceTag($seo->meta_keyword ?? '', $tagArray);
        
        $ogImage = $seo->og_image_path 
            ? url('storage/' . ltrim($seo->og_image_path, '/'))
            : null;
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'canonical' => url('/' . $path),
            'ogImage' => $ogImage,
        ];
    }
    
    /**
     * Resolve SEO meta for courses listing pages
     */
    private static function resolveCourses(string $path): ?array
    {
        // Parse the path to extract filter information
        $levelSlug = null;
        $categorySlug = null;
        $specializationSlug = null;
        
        // Check if it's a filtered path like "diploma-courses" or "business-and-management-courses"
        if (preg_match('#^([^/]+)-courses$#', $path, $matches)) {
            $filterSlug = $matches[1];
            
            // Try to determine if it's a level, category, or specialization
            $level = \App\Models\Level::where('slug', $filterSlug)->first();
            $category = \App\Models\CourseCategory::where('slug', $filterSlug)->first();
            $specialization = \App\Models\CourseSpecialization::where('slug', $filterSlug)->first();
            
            if ($level) {
                $levelSlug = $level->level;
            } elseif ($category) {
                $categorySlug = $filterSlug;
            } elseif ($specialization) {
                $specializationSlug = $filterSlug;
            }
        }
        
        // Determine which SEO template to use
        $seoUrl = 'courses-in-malaysia';
        if ($levelSlug) {
            $seoUrl .= '-by-level';
        } elseif ($categorySlug) {
            $seoUrl .= '-by-category';
        } elseif ($specializationSlug) {
            $seoUrl .= '-by-specialization';
        }
        
        $dseo = DynamicPageSeo::where('url', $seoUrl)->first();
        
        // Get current filter values
        $curLevel = $levelSlug ? \App\Models\Level::where('level', $levelSlug)->first() : null;
        $curCat = $categorySlug ? \App\Models\CourseCategory::where('slug', $categorySlug)->first() : null;
        $curSpc = $specializationSlug ? \App\Models\CourseSpecialization::where('slug', $specializationSlug)->first() : null;
        
        // Count courses and universities
        $query = \App\Models\UniversityProgram::where('status', 1)
            ->whereHas('university', function ($q) {
                $q->where('status', 1);
            });
        
        if ($curLevel) {
            $query->where('level', $curLevel->level);
        }
        if ($curCat) {
            $query->where('course_category_id', $curCat->id);
        }
        if ($curSpc) {
            $query->where('specialization_id', $curSpc->id);
        }
        
        $noc = $query->count();
        $nou = (clone $query)->groupBy('university_id')->get()->count();
        
        $pageContentKeyword = $curLevel->level ?? $curCat->name ?? $curSpc->name ?? '';
        
        $tagArray = [
            'title' => $pageContentKeyword,
            'currentmonth' => date('M'),
            'currentyear' => date('Y'),
            'site' => config('app.url'),
            'category' => $curCat->name ?? '',
            'specialization' => $curSpc->name ?? '',
            'level' => $curLevel->level ?? '',
            'nou' => $nou,
            'noc' => $noc,
        ];
        
        $metaTitle = $dseo ? replaceTag($dseo->meta_title, $tagArray) : "Courses in Malaysia";
        $metaDescription = $dseo ? replaceTag($dseo->meta_description, $tagArray) : '';
        $metaKeywords = $dseo ? replaceTag($dseo->meta_keyword, $tagArray) : '';
        
        $ogImage = $dseo && $dseo->og_image_path 
            ? url('storage/' . ltrim($dseo->og_image_path, '/'))
            : null;
        
        return [
            'metaTitle' => $metaTitle,
            'metaDescription' => $metaDescription,
            'metaKeywords' => $metaKeywords,
            'canonical' => url('/' . $path),
            'ogImage' => $ogImage,
        ];
    }
}
