<?php
$block_files = [
    'banner',
    'services',
    'important-articles',
    'useful-articles',
    'actual-articles',
    'seo-module',
    'best-services',
    'single-nav',
    'note',
    'quote',
    'text-for-nav',
    'cloud-link',
    'advantages-and-disadvantages',
    'video-block',
    'chosen-comment',
    'gallery',
];

foreach ($block_files as $block) {
    require get_template_directory() . '/functions-parts/blocks/' . $block . '.php';
}
