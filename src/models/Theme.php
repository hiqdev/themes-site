<?php

namespace hiqdev\themes\site\models;

use Yii;
use yii\base\Model;

class Theme extends Model
{
    const TYPE_ADMIN = 'admin';
    const TYPE_SITE = 'site';
    const TYPE_BLOG = 'blog';

    public $label;
    public $name;
    public $description;
    public $license;
    public $author;
    public $type;
    public $screenshot;

    public static function getTypes()
    {
        return [
            static::TYPE_ADMIN => Yii::t('hiqdev:themes', 'Admin panels'),
            static::TYPE_SITE => Yii::t('hiqdev:themes', 'Site templates'),
            static::TYPE_BLOG => Yii::t('hiqdev:themes', 'Blog themes'),
        ];
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

    public function getImage()
    {
        $src = null;
        if ($this->screenshot) {
            Yii::$app->assetManager->publish($this->screenshot);
            $src = Yii::$app->assetManager->getPublishedUrl($this->screenshot);
        }

        return $src;
    }

    public function getImages()
    {
        return []; // todo: not implemented
    }

    public function getDetailedTheme()
    {
    }
}
