<?php
/**
 * Themes site
 *
 * @link      https://github.com/hiqdev/themes-site
 * @package   themes-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

return [
    'id' => 'themes-site',
    'name' => 'Themes site',
    'controllerNamespace' => 'hiqdev\\themes\\site\\controllers',
    'defaultRoute' => 'theme',
    'container' => [
        'definitions' => [
            \hiqdev\thememanager\menus\AbstractMainMenu::class => \hiqdev\themes\site\menus\MainMenu::class,
            \hiqdev\thememanager\menus\AbstractNavbarMenu::class => \hiqdev\themes\site\menus\NavbarMenu::class,
        ],
    ],
    'modules' => [
        'pages' => [
            'storage' => [
                'class' => \creocoder\flysystem\LocalFilesystem::class,
                'path' => '@hiqdev/themes/site/pages',
            ],
        ],
    ],
    'components' => [
        'themeManager' => [
            'pathMap' => [
                '$themedViewPaths' => ['@hiqdev/themes/site/views'],
            ],
        ],
        'i18n' => [
            'translations' => [
                'hiqdev:themes' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/site/messages',
                ],
            ],
        ],
        'thumbnail' => [
            'class' => \sadovojav\image\Thumbnail::class,
            'basePath' => '@webroot',
            'cachePath' => '@webroot/assets/thumbnails',
            'options' => [
                'placeholder' => [
                    'type' => 'js',
                    'backgroundColor' => '#f5f5f5',
                    'textColor' => '#cdcdcd',
                    'textSize' => 16,
                    'text' => 'Image not found',
                    'random' => false,
                    'cache' => true,
                ],
                'quality' => 62,
            ],
        ],
    ],
];
