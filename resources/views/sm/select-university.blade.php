@php
  echo $utf;
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>{{ sitemap_url('universities/universities-in-malaysia') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('universities/public-institution-in-malaysia') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('universities/private-institution-in-malaysia') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <url>
    <loc>{{ sitemap_url('universities/foreign-universities-in-malaysia') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
</urlset>
