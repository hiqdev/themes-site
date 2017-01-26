<?php

namespace hiqdev\themes\site\models;

use Yii;
use yii\base\Model;

class Theme extends Model
{
    const TYPE_ADMIN = 'admin';
    const TYPE_SITE = 'site';
    const TYPE_BLOG = 'blog';
    const TYPE_COMMERCE = 'commerce';

    public $theme;
    public $label;
    public $name;
    public $type;
    public $images;
    public $description;

    public static function getTypes()
    {
        return [
            static::TYPE_ADMIN => Yii::t('hiqdev:themes', 'Admin templates'),
            static::TYPE_SITE => Yii::t('hiqdev:themes', 'Site templates'),
            static::TYPE_BLOG => Yii::t('hiqdev:themes', 'Blog templates'),
            static::TYPE_COMMERCE => Yii::t('hiqdev:themes', 'E-Commerce template'),
        ];
    }

    public static function getTypesMenuItems()
    {
        $items = [];
        foreach (static::getTypes() as $type => $label) {
            $items[] = ['label' => $label, 'url' => ['/theme/catalog', 'type' => $type]];
        }

        return $items;
    }

    public function attributeLabels()
    {
        return [
            'label' => Yii::t('hiqdev:themes', 'Label'),
            'name' => Yii::t('hiqdev:themes', 'Name'),
            'description' => Yii::t('hiqdev:themes', 'Description'),
            'screenshot' => Yii::t('hiqdev:themes', 'Screenshot'),
        ];
    }

    public function getLink()
    {
        return ['/theme/view', 'name' => $this->name];
    }

    /**
     * @return array
     */
    public function getImages()
    {
        $src = [];
        if ($this->images) {
            foreach ($this->images as $image) {
                if (is_file(Yii::getAlias($image))) {
                    Yii::$app->assetManager->publish($image);
                    $src[] = Yii::$app->assetManager->getPublishedUrl($image);
                }
            }
        }

        return $src;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return reset($this->getImages());
    }
}
