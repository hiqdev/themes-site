<?php

namespace hiqdev\themes\site;


use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/site/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/theme.site.css',
    ];
}
