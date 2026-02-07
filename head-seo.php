<?php
/**
 * PVCOUTLET.GR – SEO block (title, meta description, canonical, Open Graph).
 * Include once per page. Sets $seo for use in H1: <?php echo htmlspecialchars($seo['h1']); ?>
 * Usage from root: include 'head-seo.php';
 * Usage from subfolder: include __DIR__ . '/../head-seo.php'; or define SEO_INCLUDE_ROOT and include 'head-seo.php';
 */
$seo_include_dir = defined('SEO_INCLUDE_ROOT') ? SEO_INCLUDE_ROOT : __DIR__;
require_once $seo_include_dir . '/seo-config.php';
$seo = get_seo_for_request();
?>
<title><?php echo htmlspecialchars($seo['title']); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($seo['description']); ?>">
<link rel="canonical" href="<?php echo htmlspecialchars($seo['canonical']); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="PVCOUTLET">
<meta property="og:url" content="<?php echo htmlspecialchars($seo['canonical']); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($seo['og_title']); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($seo['og_desc']); ?>">
<meta property="og:image:url" content="https://pvcoutlet.gr/img/pvcoutlet_1200x630.png">
<meta property="og:image" content="https://pvcoutlet.gr/img/pvcoutlet_1200x630.png">
