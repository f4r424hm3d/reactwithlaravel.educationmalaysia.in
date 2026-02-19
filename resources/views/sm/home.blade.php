@php
  echo $utf;
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
  <url>
    <loc>{{ sitemap_url() }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('who-we-are') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('what-people-say') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('universities') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('contact-us') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('terms-and-conditions') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('privacy-policy') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('faqs') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
</urlset>
