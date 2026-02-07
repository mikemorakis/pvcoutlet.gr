<?php
/**
 * PVCOUTLET.GR – Central SEO config (one place to edit titles, descriptions, H1s, canonicals).
 * Used by head-seo.php and sitemap.php. Edit here only for future changes.
 */
if (!defined('PVCOUTLET_SEO_CONFIG')) {
    define('PVCOUTLET_SEO_CONFIG', true);
}

$SEO_BASE = 'https://pvcoutlet.gr';

$SEO_PAGES = [
    'home' => [
        'url'       => '/',
        'canonical' => 'https://pvcoutlet.gr/',
        'title'     => 'Κουφώματα PVC στις καλύτερες τιμές | PVCOUTLET®',
        'description' => 'Ψάχνετε για νέα κουφώματα; PVC Κουφώματα της PVCOUTLET®. Ετοιμοπαράδοτα pvc παράθυρα, μπαλκονόπορτες, πόρτες, ρολά & σίτες στις καλύτερες τιμές.',
        'h1'        => 'Κουφώματα PVC στις καλύτερες τιμές από την PVCOUTLET®',
        'og_title'  => 'Κουφώματα PVC, παράθυρα pvc, μπαλκονόπορτες pvc, ρολά & σίτες | PVCOUTLET®',
        'og_desc'   => 'Στην PVC OUTLET® θα βρείτε παράθυρα pvc, μπαλκονόπορτες pvc, ρολά & σίτες.',
        'priority'  => '1.0',
        'changefreq'=> 'weekly',
    ],
    'parathira' => [
        'url'       => '/pvc-parathira/',
        'canonical' => 'https://pvcoutlet.gr/pvc-parathira/',
        'title'     => 'Παράθυρα PVC σε τιμές από 85€ | PVCOUTLET®',
        'description' => 'Ψάχνετε για νέα παράθυρα pvc; Τα ετοιμοπαράδοτα PVC Παράθυρα της PVCOUTLET® καλύπτουν όλες τις ανάγκες σας.',
        'h1'        => 'Ετοιμοπαράδοτα παράθυρα PVC σε τιμές από 85€',
        'og_title'  => 'Παράθυρα PVC σε τιμές από 85€ | PVCOUTLET®',
        'og_desc'   => 'Ετοιμοπαράδοτα παράθυρα pvc στις καλύτερες τιμές. Θερμομόνωση, ηχομόνωση, 12 άτοκες δόσεις.',
        'priority'  => '0.9',
        'changefreq'=> 'weekly',
    ],
    'balkonoportes' => [
        'url'       => '/pvc-balkonoportes/',
        'canonical' => 'https://pvcoutlet.gr/pvc-balkonoportes/',
        'title'     => 'Μπαλκονόπορτες PVC σε τιμές από 350€ | PVCOUTLET®',
        'description' => 'Ψάχνετε για νέες μπαλκονόπορτες pvc; Στην PVCOUTLET® θα βρείτε μπαλκονόπορτες στις καλύτερες τιμές.',
        'h1'        => 'Ετοιμοπαράδοτες μπαλκονόπορτες PVC σε τιμές από 350€',
        'og_title'  => 'Μπαλκονόπορτες PVC σε τιμές από 350€ | PVCOUTLET®',
        'og_desc'   => 'Ετοιμοπαράδοτες μπαλκονόπορτες pvc. Θερμομόνωση, ηχομόνωση, πανελλαδική παράδοση.',
        'priority'  => '0.9',
        'changefreq'=> 'weekly',
    ],
    'rola' => [
        'url'       => '/pvc-rola/',
        'canonical' => 'https://pvcoutlet.gr/pvc-rola/',
        'title'     => 'Ρολά PVC ηλεκτρικά & χειροκίνητα | PVCOUTLET®',
        'description' => 'Ρολά πολυουρεθάνης και PVC σε οικονομικές τιμές. Ηλεκτρικά και χειροκίνητα ρολά για παράθυρα και μπαλκονόπορτες.',
        'h1'        => 'Ρολά Πολυουρεθάνης σε οικονομικές τιμές',
        'og_title'  => 'Ρολά PVC | PVCOUTLET®',
        'og_desc'   => 'Ρολά pvc ηλεκτρικά και χειροκίνητα στις καλύτερες τιμές.',
        'priority'  => '0.8',
        'changefreq'=> 'monthly',
    ],
    'patzouria' => [
        'url'       => '/pvc-patzouria/',
        'canonical' => 'https://pvcoutlet.gr/pvc-patzouria/',
        'title'     => 'Πατζούρια PVC από 50€ | PVCOUTLET®',
        'description' => 'Πατζούρια PVC ανοιγόμενα και συρόμενα. Συνθετικά πατζούρια για παράθυρα και μπαλκονόπορτες στις καλύτερες τιμές.',
        'h1'        => 'Πατζούρια PVC από 50€',
        'og_title'  => 'Πατζούρια PVC | PVCOUTLET®',
        'og_desc'   => 'Πατζούρια pvc για παράθυρα και μπαλκονόπορτες.',
        'priority'  => '0.8',
        'changefreq'=> 'monthly',
    ],
    'kouzinoportes' => [
        'url'       => '/pvc-kouzinoportes/',
        'canonical' => 'https://pvcoutlet.gr/pvc-kouzinoportes/',
        'title'     => 'Κουζινόπορτες PVC σε οικονομικές τιμές | PVCOUTLET®',
        'description' => 'Κουζινόπορτες PVC θερμομονωτικές. Ετοιμοπαράδοτες κουζινόπορτες pvc στις καλύτερες τιμές.',
        'h1'        => 'Κουζινόπορτες PVC σε οικονομικές τιμές',
        'og_title'  => 'Κουζινόπορτες PVC | PVCOUTLET®',
        'og_desc'   => 'Κουζινόπορτες pvc σε οικονομικές τιμές.',
        'priority'  => '0.7',
        'changefreq'=> 'monthly',
    ],
    'sites' => [
        'url'       => '/sites/',
        'canonical' => 'https://pvcoutlet.gr/sites/',
        'title'     => 'Σίτες παραθύρων & πορτών πλισέ από €100 | PVCOUTLET®',
        'description' => 'Σίτες παραθύρων και πορτών πλισέ. Σίτες κάθετες, ανοιγόμενες, πλισέ για παράθυρα και μπαλκονόπορτες στις καλύτερες τιμές.',
        'h1'        => 'Σίτες παραθύρων & πορτών πλισέ σε τιμές από €100',
        'og_title'  => 'Σίτες παραθύρων πλισέ από €100 | PVCOUTLET®',
        'og_desc'   => 'Σίτες πλισέ, ανοιγόμενες, κάθετες για κουφώματα pvc.',
        'priority'  => '0.8',
        'changefreq'=> 'monthly',
    ],
    'epikoinonia' => [
        'url'       => '/pvc-koufomata/epikoinonia.php',
        'canonical' => 'https://pvcoutlet.gr/pvc-koufomata/epikoinonia.php',
        'title'     => 'Επικοινωνία | Κουφώματα PVC PVCOUTLET®',
        'description' => 'Καλέστε μας για προσφορά κουφωμάτων pvc. Ετοιμοπαράδοτα παράθυρα, μπαλκονόπορτες και πόρτες στις καλύτερες τιμές.',
        'h1'        => 'Επικοινωνία – Κουφώματα PVC σε 12 άτοκες δόσεις',
        'og_title'  => 'Επικοινωνία | PVCOUTLET®',
        'og_desc'   => 'Επικοινωνήστε μαζί μας για προσφορά κουφωμάτων pvc.',
        'priority'  => '0.7',
        'changefreq'=> 'monthly',
    ],
    'blog-zografou' => [
        'url'       => '/blog/koufomata-pvc-zografou.php',
        'canonical' => 'https://pvcoutlet.gr/blog/koufomata-pvc-zografou.php',
        'title'     => 'Κουφώματα PVC Ζωγράφου | PVCOUTLET®',
        'description' => 'Εγκατάσταση κουφωμάτων PVC σε σπίτι στο Ζωγράφου. Ετοιμοπαράδοτα παράθυρα και μπαλκονόπορτες pvc.',
        'h1'        => 'Κουφώματα PVC σε σπίτι στο Ζωγράφου',
        'og_title'  => 'Κουφώματα PVC Ζωγράφου | PVCOUTLET®',
        'og_desc'   => 'Έργο κουφωμάτων pvc στο Ζωγράφου.',
        'priority'  => '0.6',
        'changefreq'=> 'yearly',
    ],
];

// Path → page key (for REQUEST_URI detection). Order matters: more specific first.
$SEO_PATH_MAP = [
    '/pvc-parathira'     => 'parathira',
    '/pvc-balkonoportes'  => 'balkonoportes',
    '/pvc-rola'           => 'rola',
    '/pvc-patzouria'      => 'patzouria',
    '/pvc-kouzinoportes'  => 'kouzinoportes',
    '/sites'              => 'sites',
    '/pvc-koufomata/epikoinonia' => 'epikoinonia',
    '/blog/koufomata-pvc-zografou' => 'blog-zografou',
    '/'                   => 'home',
    ''                    => 'home',
];

/**
 * Returns SEO data for current request. Call from any page (root or subfolder).
 */
function get_seo_for_request() {
    global $SEO_PAGES, $SEO_PATH_MAP;
    $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    $path = parse_url($uri, PHP_URL_PATH);
    $path = rtrim($path, '/');
    if ($path === '') $path = '/';
    foreach ($SEO_PATH_MAP as $prefix => $key) {
        if ($path === $prefix || strpos($path, $prefix . '/') === 0 || strpos($path, $prefix . '.') === 0) {
            return isset($SEO_PAGES[$key]) ? $SEO_PAGES[$key] : $SEO_PAGES['home'];
        }
    }
    return $SEO_PAGES['home'];
}
