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
 * Navbar menu.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class NavbarMenu extends MainMenu
{
    public function items()
    {
        return [
            [
                'label' => Yii::t('hiqdev:themes', 'Help Center'),
                'url' => ['#'],
            ],
            [
                'label' => Yii::t('hiqdev:themes', 'Team'),
                'url' => ['#'],
            ],
            [
                'label' => Yii::t('hiqdev:themes', 'Blog'),
                'url' => ['#'],
            ],
            [
                'label' => Yii::t('hiqdev:themes', 'About'),
                'url' => ['#'],
            ],
            [
                'label' => Yii::t('hiqdev:themes', 'Contact Us'),
                'url' => ['/site/contacts'],
            ],
        ];
    }
}
