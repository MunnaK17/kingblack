<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'Laravel hidup';
});

Route::get('/robots.txt', function () {
    $baseUrl = rtrim(config('app.url'), '/');

    return response(
        "User-agent: *\nAllow: /\n\nSitemap: {$baseUrl}/sitemap.xml\n",
        200,
        ['Content-Type' => 'text/plain']
    );
});

Route::get('/sitemap.xml', function () {
    $baseUrl = rtrim(config('app.url'), '/');
    $lastmod = now()->toDateString();
    $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{$baseUrl}/</loc>
        <lastmod>{$lastmod}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
</urlset>
XML;

    return response($xml, 200, ['Content-Type' => 'application/xml']);
});

Route::get('/', function () {
    return view('pages.home');
});
