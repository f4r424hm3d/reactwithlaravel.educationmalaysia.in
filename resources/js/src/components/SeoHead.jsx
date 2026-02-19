import React from "react";
import { Helmet } from "react-helmet-async";
import { useLocation } from "react-router-dom";
import seoEngine from "../utils/seoEngine";
import { ADMIN_URL } from "../config";

/**
 * SeoHead Component
 *
 * Automatically generates all SEO meta tags based on current URL and page data.
 * Supports pagination, Open Graph, Twitter Cards, and structured data.
 *
 * @param {Object} props
 * @param {string} props.pageType - Override auto-detected page type (optional)
 * @param {Object} props.data - Page-specific data (name, category, description, etc.)
 * @param {string} props.image - Custom Open Graph image URL (optional)
 * @param {boolean} props.noindex - Prevent search engine indexing (optional)
 * @param {Object} props.overrides - Manual overrides for title, description, canonical (optional)
 */
const SeoHead = ({
  pageType: manualPageType,
  data = {},
  image,
  preloadImage,
  noindex = false,
  overrides = {},
  lastPage = null,
}) => {
  const location = useLocation();

  // ✅ CHECK: If server-side meta tags are already rendered (Initial Load), skip client-side injection.
  // We use a ref to track this so that subsequent navigations (where we WANT client-side tags) work correctly.
  const serverMetaRef = React.useRef(
    document.querySelector('meta[name="server-rendered-meta"]'),
  );

  React.useEffect(() => {
    // If we detected server meta tags on mount, remove the marker so subsequent navigations
    // are handled by React Helmet (Client Side).
    if (serverMetaRef.current) {
      serverMetaRef.current.remove();
      serverMetaRef.current = null;
    }
  }, []); // Run once on mount

  if (serverMetaRef.current) {
    return null; // Server already rendered meta tags, no need for client-side Helmet on this initial render
  }

  // Parse URL
  const urlData = seoEngine.parseUrl(location);
  const { page, isPaginated } = seoEngine.getPagination(
    urlData.searchParams,
    urlData.pathname,
  );

  // ... existing code ...

  // Detect page type (use manual if provided, otherwise auto-detect)
  const pageType = manualPageType || seoEngine.detectPageType(urlData.pathname);

  // Extract slug if needed
  const slug = data.slug || seoEngine.extractSlug(urlData.pathname, pageType);

  // Build SEO data - AGGRESSIVELY CLEAN ALL INPUTS
  const pageData = {
    ...data,
    slug,
    name: seoEngine.cleanQuotes(data.name || data.title || ""), // Clean name first!
    title: seoEngine.cleanQuotes(data.title || ""),
    category: seoEngine.cleanQuotes(data.category || ""),
    description: data.description, // Keep HTML as-is for now
  };

  // ✅ BACKEND PRIORITY: If backend provides meta_title, use it directly!
  // This bypasses the seoEngine.buildTitle logic which might ignore the name
  let backendTitle =
    data.meta_title ||
    data.metaTitle ||
    data.seo_title ||
    data.title_meta ||
    data.seoTitle;

  if (backendTitle === "%title%") {
    backendTitle = null; // Ignore placeholder from backend
  }

  let backendDescription =
    data.meta_description ||
    data.metaDescription ||
    data.seo_description ||
    data.description_meta ||
    data.og_description;

  if (
    backendDescription === "%description%" ||
    backendDescription === "%title%"
  ) {
    backendDescription = null;
  }

  let backendKeywords =
    data.meta_keywords ||
    data.metaKeywords ||
    data.meta_keyword ||
    data.keywords_meta ||
    data.keywords;

  // Debug log to trace SEO data issues
  if (
    pageType === "home" ||
    pageType === "universities-listing" ||
    pageType.includes("scholarship") ||
    pageType.includes("blog")
  ) {
    console.log(`[SeoHead:${pageType}] Full Data Prop:`, data);
    console.log(`[SeoHead:${pageType}] Detected Title:`, backendTitle);
    console.log(`[SeoHead:${pageType}] Detected Desc:`, backendDescription);
    console.log(`[SeoHead:${pageType}] Detected Keywords:`, backendKeywords);
  }

  // Handle backend image (og_image_path, og_image, etc.)
  let backendImage =
    data.og_image_path ||
    data.og_image ||
    data.ogImage ||
    data.image_meta ||
    data.image;

  if (
    backendImage &&
    typeof backendImage === "string" &&
    !backendImage.startsWith("http")
  ) {
    // Assuming storage path if not absolute URL
    backendImage = `${ADMIN_URL.replace(/\/$/, "")}/storage/${backendImage.replace(/^\/+/, "")}`;
  }

  // Calculate final title: Override > Backend > Auto-generated
  let title =
    overrides.title ||
    backendTitle ||
    seoEngine.buildTitle(pageType, pageData, page);

  if (pageType === "home") {
    console.log(`[SeoHead:${pageType}] Final Title:`, title);
  }

  // Ensure title is clean of surrounding quotes - Force clean even if overridden
  if (seoEngine.cleanQuotes) {
    title = seoEngine.cleanQuotes(title);
  }

  // Calculate final description: Override > Backend > Auto-generated
  const description =
    overrides.description ||
    backendDescription ||
    seoEngine.buildDescription(pageType, pageData, page);

  let canonical = overrides.canonical || seoEngine.buildCanonical(location);
  // Safety: never allow admin domain in canonical
  if (canonical && canonical.includes("admin.educationmalaysia")) {
    canonical = canonical.replace(
      /https?:\/\/admin\.educationmalaysia\.in/,
      seoEngine.SITE_URL,
    );
  }
  const ogImage = image || backendImage || seoEngine.DEFAULT_IMAGE;

  // Generate breadcrumbs
  const breadcrumbs = seoEngine.generateBreadcrumbs(
    urlData.pathname,
    pageType,
    pageData,
    page,
  );
  const breadcrumbSchema = seoEngine.generateBreadcrumbSchema(
    breadcrumbs,
    title,
    description,
  );

  // Pagination links (for rel="prev" and rel="next")
  const searchParams = new URLSearchParams(location.search);
  searchParams.delete("page");
  const queryString = searchParams.toString()
    ? `?${searchParams.toString()}`
    : "";
  const cleanPath = urlData.pathname
    .replace(/\/page-\d+$/, "")
    .replace(/\/$/, "");

  const prevPage =
    page > 2
      ? `${seoEngine.SITE_URL}${cleanPath}/page-${page - 1}${queryString}`
      : page === 2
        ? `${seoEngine.SITE_URL}${cleanPath}${queryString}`
        : null;

  // Only show next if we know lastPage and current page is less than it
  const hasNextPage = lastPage ? page < lastPage : true;
  const nextPage = hasNextPage
    ? `${seoEngine.SITE_URL}${cleanPath}/page-${page + 1}${queryString}`
    : null;

  return (
    <Helmet>
      {/* Basic Meta Tags */}
      <title>
        {String(title || "")
          .replace(/^["'\u201C\u201D\u2018\u2019`]+/g, "")
          .replace(/["'\u201C\u201D\u2018\u2019`]+$/g, "")
          .replace(/["'\u201C\u201D\u2018\u2019`]/g, "")
          .trim()}
      </title>
      <meta name="description" content={description || ""} />
      <meta name="keywords" content={backendKeywords || ""} />

      {/* Robots */}
      {noindex ? (
        <meta name="robots" content="noindex, nofollow" />
      ) : (
        <meta name="robots" content="index, follow" />
      )}

      {/* Preload LCP Image */}
      {preloadImage && (
        <link
          rel="preload"
          as="image"
          href={preloadImage}
          fetchpriority="high"
        />
      )}

      {/* Preconnect/dns-prefetch handled in index.html to avoid duplicates */}

      {/* Canonical URL */}
      <link rel="canonical" href={canonical} />

      {/* Pagination Links */}
      {isPaginated && prevPage && <link rel="prev" href={prevPage} />}
      {isPaginated && nextPage && <link rel="next" href={nextPage} />}

      {/* Open Graph Tags */}
      <meta property="og:title" content={title} />
      <meta property="og:description" content={description} />
      <meta property="og:url" content={canonical} />
      <meta property="og:image" content={ogImage} />
      <meta
        property="og:type"
        content={pageType.includes("-detail") ? "article" : "website"}
      />
      <meta property="og:site_name" content={seoEngine.SITE_NAME} />
      <meta property="og:locale" content="en_US" />

      {/* Twitter Card Tags */}
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content={title} />
      <meta name="twitter:description" content={description} />
      <meta name="twitter:image" content={ogImage} />
      <meta name="twitter:site" content="@educatemalaysia" />

      {/* Structured Data - Breadcrumbs */}
      <script type="application/ld+json">
        {JSON.stringify(breadcrumbSchema)}
      </script>

      {/* Structured Data - WebPage */}
      <script type="application/ld+json">
        {JSON.stringify({
          "@context": "https://schema.org",
          "@type": "WebPage",
          inLanguage: "en-US",
          name: title,
          description: description,
          url: `${window.location.origin}${location.pathname}${location.search}`,
          publisher: {
            "@type": "Organization",
            name: "Education Malaysia",
            logo: {
              "@type": "ImageObject",
              url: "https://www.educationmalaysia.in/assets/web/images/education-malaysia-new-logo.png",
              width: 230,
              height: 55,
            },
          },
        })}
      </script>

      {/* Structured Data - Organization (Homepage only) */}
      {pageType === "home" && (
        <script type="application/ld+json">
          {JSON.stringify({
            "@context": "http://schema.org",
            "@type": "Organization",
            name: "EducationMalaysia",
            url: "https://www.educationmalaysia.in/",
            logo: "https://www.educationmalaysia.in/assets/web/images/education-malaysia-new-logo.png",
            image:
              "https://www.educationmalaysia.in/assets/web/images/education-malaysia-new-logo.png",
            sameAs: [
              "https://www.facebook.com/educationmalaysia.in",
              "https://www.pinterest.com/educationmalaysiain/",
              "https://twitter.com/educatemalaysia/",
              "https://www.instagram.com/educationmalaysia.in/",
              "https://www.quora.com/profile/Education-Malaysia-3",
              "https://www.linkedin.com/company/educationmalaysia/",
              "https://www.youtube.com/channel/UCK7S9yvQnx08CgcDMMfYAyg",
            ],
            contactPoint: [
              {
                "@type": "ContactPoint",
                telephone: "+91 9818560331",
                contactType: "customer support",
              },
            ],
          })}
        </script>
      )}

      {/* Additional Structured Data (if provided) */}
      {data.structuredData && (
        <script type="application/ld+json">
          {JSON.stringify(data.structuredData)}
        </script>
      )}
    </Helmet>
  );
};

export default SeoHead;
