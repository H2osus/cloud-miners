<?php
$block_files = [
    'banner',
    'services',
    'important-articles',
    'useful-articles',
    'actual-articles',
    'seo-module',
    'best-services',
];

foreach ($block_files as $block) {
    require get_template_directory() . '/functions-parts/blocks/' . $block . '.php';
}
