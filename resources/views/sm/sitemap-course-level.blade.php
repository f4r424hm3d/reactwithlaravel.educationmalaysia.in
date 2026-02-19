@php
  echo $utf;
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach ($rows as $row)
    <url>
      <loc>{{ sitemap_url('courses/' . $row) }}</loc>
      <changefreq>always</changefreq>
      <priority>0.5</priority>
    </url>
  @endforeach
</urlset>
