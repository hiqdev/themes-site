<?php
/**
 * Themes site
 *
 * @link      https://github.com/hiqdev/themes-site
 * @package   themes-site
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\site\menus;

use Yii;

/**
 * Main menu.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class MainMenu extends \hiqdev\yii2\menus\Menu
{
    public function items()
    {
        return [
            'news' => ['label' => Yii::t('hiqdev:themes', 'News'),
                'url' => ['/pages/render/index', 'page' => 'index'],
            ],
            'about' => [
                'label' => Yii::t('hiqdev:themes', 'About'),
                'url' => ['/pages/render/index', 'page' => 'about'],
            ],
            'packages' => [
                'label' => Yii::t('hiqdev:themes', 'Packages'),
                'url' => ['/pages/render/index', 'page' => 'packages'],
            ],
            'projects' => [
                'label' => Yii::t('hiqdev:themes', 'Projects'),
                'url' => ['/pages/render/index', 'page' => 'projects'],
            ],
        ];
    }
}
