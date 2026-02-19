@php
  echo $utf;
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>{{ sitemap_url('resources/services') }}</loc>
    <lastmod>{{ date('Y-m-d') }}</lastmod>
    <changefreq>always</changefreq>
    <priority>0.8</priority>
  </url>
  @foreach ($services as $row)
    <url>
      <loc>{{ sitemap_url('resources/services/' . $row->uri) }}</loc>
      <lastmod>{{ $row->updated_at->format('Y-m-d') }}</lastmod>
      <changefreq>always</changefreq>
      <priority>0.5</priority>
    </url>
  @endforeach
</urlset>
