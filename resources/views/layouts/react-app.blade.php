<!doctype html>
<!-- SERVER SIDE RENDERED BY LARAVEL (SEO ACTIVE) -->
<html lang="en">
  <head>
    {{-- Essential technical meta tags --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    {{-- Server-rendered meta marker (for React to detect) --}}
    <meta name="server-rendered-meta" content="true" />
    
    {{-- Dynamic Title --}}
    <title>{{ $metaTitle ?? 'Education Malaysia - Study in Malaysia' }}</title>
    
    {{-- Dynamic Meta Tags --}}
    @if(!empty($metaDescription))
    <meta name="description" content="{{ $metaDescription }}" />
    @endif
    
    @if(!empty($metaKeywords))
    <meta name="keywords" content="{{ $metaKeywords }}" />
    @endif
    
    {{-- Robots Meta --}}
    <meta name="robots" content="{{ $robots ?? 'index, follow' }}" />
    
    {{-- Favicon --}}
    <link
      rel="icon"
      href="https://admin.educationmalaysia.in/storage/front/assets/img/favicon.png"
      type="image/png"
    />
    <link
      rel="apple-touch-icon"
      href="https://admin.educationmalaysia.in/storage/front/assets/img/favicon.png"
    />

    {{-- Performance Optimizations --}}
    <link rel="dns-prefetch" href="https://admin.educationmalaysia.in" />
    <link rel="preconnect" href="https://admin.educationmalaysia.in" crossorigin />
    
    {{-- Canonical URL --}}
    @if(!empty($canonical))
    <link rel="canonical" href="{{ $canonical }}" />
    @endif
    
    {{-- Open Graph Tags --}}
    @if(!empty($metaTitle))
    <meta property="og:title" content="{{ $metaTitle }}" />
    @endif
    
    @if(!empty($metaDescription))
    <meta property="og:description" content="{{ $metaDescription }}" />
    @endif
    
    @if(!empty($canonical))
    <meta property="og:url" content="{{ $canonical }}" />
    @endif
    
    @if(!empty($ogImage))
    <meta property="og:image" content="{{ $ogImage }}" />
    @endif
    
    <meta property="og:type" content="{{ $ogType ?? 'website' }}" />
    <meta property="og:site_name" content="Education Malaysia" />
    <meta property="og:locale" content="en_US" />
    
    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image" />
    
    @if(!empty($metaTitle))
    <meta name="twitter:title" content="{{ $metaTitle }}" />
    @endif
    
    @if(!empty($metaDescription))
    <meta name="twitter:description" content="{{ $metaDescription }}" />
    @endif
    
    @if(!empty($ogImage))
    <meta name="twitter:image" content="{{ $ogImage }}" />
    @endif
    
    <meta name="twitter:site" content="@educatemalaysia" />
    
    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    {{-- React Root --}}
    <div id="root"></div>
    
    {{-- Production JS is injected by @vite --}}
    
    {{-- Google Tag Manager (deferred to avoid blocking LCP) --}}
    <script defer>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-WP578P4K");
    </script>
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-WP578P4K"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
  </body>
</html>
