<?php

return [
    /*
     | General settings.
     */
    'general' => [
        // TODO: set this to your real domain (no trailing slash).
        'base_url' => 'https://orchid-dugong-944162.hostingersite.com',
        'language' => 'en',
        // Serve the pre-built assets straight from the committed /dist folder.
        'assets_url' => '/dist',
        'uploads_url' => '/uploads'
    ],

    /*
     | Storage settings (MySQL database).
     */
    'storage' => [
        'use_database' => true,
        'database' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            // TODO: fill in the MySQL database/user/password you create in hPanel.
            'database'  => 'YOUR_DB_NAME',
            'username'  => 'YOUR_DB_USER',
            'password'  => 'YOUR_DB_PASSWORD',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        'uploads_folder' => __DIR__ . '/uploads'
    ],

    /*
     | Auth settings for the admin panel (/admin).
     */
    'auth' => [
        'use_login' => true,
        'class' => PHPageBuilder\Modules\Auth\Auth::class,
        'url' => '/admin/auth',
        // TODO: change these admin login credentials.
        'username' => 'admin',
        'password' => 'changethispassword'
    ],

    /*
     | WebsiteManager settings.
     */
    'website_manager' => [
        'use_website_manager' => true,
        'class' => PHPageBuilder\Modules\WebsiteManager\WebsiteManager::class,
        'url' => '/admin'
    ],

    /*
     | Website settings.
     */
    'setting' => [
        'class' => PHPageBuilder\Setting::class
    ],

    /*
     | PageBuilder settings.
     */
    'pagebuilder' => [
        'class' => PHPageBuilder\Modules\GrapesJS\PageBuilder::class,
        'url' => '/admin/pagebuilder',
        'actions' => [
            'back' => '/admin'
        ]
    ],

    /*
     | Page settings.
     */
    'page' => [
        'class' => PHPageBuilder\Page::class,
        'table' => 'pages',
        'translation' => [
            'class' => PHPageBuilder\PageTranslation::class,
            'table' => 'page_translations',
            'foreign_key' => 'page_id',
        ]
    ],

    /*
     | Cache settings.
     */
    'cache' => [
        'enabled' => false,
        'folder' => __DIR__ . '/cache',
        'class' => PHPageBuilder\Cache::class
    ],

    /*
     | Theme settings. A themes/ folder with at least the "demo" theme is
     | required to have blocks available in the page builder.
     */
    'theme' => [
        'class' => PHPageBuilder\Theme::class,
        'folder' => __DIR__ . '/themes',
        'folder_url' => '/themes',
        'active_theme' => 'demo'
    ],

    /*
     | Routing settings.
     */
    'router' => [
        'class' => PHPageBuilder\Modules\Router\DatabasePageRouter::class
    ],

    /*
     | Class replacements.
     */
    'class_replacements' => [
    ],
];
