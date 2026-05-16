@props([
    'title' => config('app.name', 'KINGBLACK'),
    'description' => 'KINGBLACK adalah bimbingan fisik dan persiapan seleksi TNI, POLRI, sekolah kedinasan, CPNS, PTN, dan kedokteran.',
    'canonical' => url()->current(),
    'ogImage' => asset('images/og-kingblack.jpg'),
    'robots' => 'index, follow',
    'schema' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>
        <meta name="description" content="{{ $description }}">
        <meta name="robots" content="{{ $robots }}">
        <link rel="canonical" href="{{ $canonical }}">

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ config('seo.business_name', 'KINGBLACK') }}">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:url" content="{{ $canonical }}">
        <meta property="og:image" content="{{ $ogImage }}">
        <meta property="og:image:alt" content="KINGBLACK bimbingan fisik dan persiapan seleksi TNI POLRI">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $title }}">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:image" content="{{ $ogImage }}">

        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="icon" type="image/png" href="{{ asset('images/logos.png') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/logos.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/logos.png') }}">
        <meta name="theme-color" content="#000000">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet">

        @if ($schema)
            <script type="application/ld+json">
                {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
            </script>
        @endif

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        {{ $slot }}
    </body>
</html>
