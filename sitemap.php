<?php
/**
 * PVCOUTLET.GR – XML Sitemap (one source: seo-config.php).
 * URL: https://pvcoutlet.gr/sitemap.php — set in robots.txt as Sitemap.
 */
header('Content-Type: application/xml; charset=utf-8');
require_once __DIR__ . '/seo-config.php';

$base = 'https://pvcoutlet.gr';
$lastmod = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($SEO_PAGES as $page) {
    $url = $base . $page['url'];
    $pri = isset($page['priority']) ? $page['priority'] : '0.5';
    $freq = isset($page['changefreq']) ? $page['changefreq'] : 'monthly';
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($url) . "</loc>\n";
    echo "    <lastmod>{$lastmod}</lastmod>\n";
    echo "    <changefreq>{$freq}</changefreq>\n";
    echo "    <priority>{$pri}</priority>\n";
    echo "  </url>\n";
}

// Static HTML subpages (not in PHP flow; add here for discovery)
$static_urls = [
    ['loc' => $base . '/sites/plise.html', 'priority' => '0.6'],
    ['loc' => $base . '/sites/anoigomenes.html', 'priority' => '0.6'],
    ['loc' => $base . '/sites/elpistria.html', 'priority' => '0.6'],
    ['loc' => $base . '/sites/kathetis-kinisisi.html', 'priority' => '0.6'],
    ['loc' => $base . '/sites/staheres.html', 'priority' => '0.6'],
    ['loc' => $base . '/sitemap.html', 'priority' => '0.4'],
];
foreach ($static_urls as $u) {
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($u['loc']) . "</loc>\n";
    echo "    <lastmod>{$lastmod}</lastmod>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>" . $u['priority'] . "</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';
