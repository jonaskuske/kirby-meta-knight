<?php

Kirby::plugin('diesdasdigital/kirby-seo', [
    'sections' => [
        'google_search_preview' => require_once __DIR__ . '/sections/google_search_preview.php',
        'facebook_sharing_preview' => require_once __DIR__ . '/sections/facebook_sharing_preview.php',
        'twitter_card_preview' => require_once __DIR__ . '/sections/twitter_card_preview.php'
    ],
    'blueprints' => [
        'seo' => __DIR__ . '/blueprints/seo.yml',
        'fields/basic_meta' => __DIR__ . '/blueprints/fields/basic_meta.yml',
        'fields/open_graph' => __DIR__ . '/blueprints/fields/open_graph.yml',
        'fields/twitter' => __DIR__ . '/blueprints/fields/twitter.yml',
        'fields/robots' => __DIR__ . '/blueprints/fields/robots.yml',
        'fields/profile' => __DIR__ . '/blueprints/fields/profile.yml',
    ],
    ]
]);
