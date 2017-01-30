<?php

namespace hiqdev\themes\site\models;

use Yii;
use yii\base\Model;
use yii\helpers\Markdown;
use yii\helpers\StringHelper;

class Theme extends Model
{
    const TYPE_ADMIN = 'admin';
    const TYPE_SITE = 'site';
    const TYPE_BLOG = 'blog';
    const TYPE_COMMERCE = 'commerce';

    public $label;
    public $name;
    public $type;
    public $images;
    public $description;
    public $author;
    public $readme;
    public $license;
    public $licenseText;
    public $bootstrap;
    public $price = 0;

    public $_description;
    public $_licenseText;
    public $_author;

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
            'label' => Yii::t('hiqdev:themes', 'Theme name'),
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
                $pathToImage = Yii::getAlias(sprintf('%s/%s', $this->getThemePath(), $image));
                if (is_file($pathToImage)) {
                    Yii::$app->assetManager->publish($pathToImage);
                    $src[] = Yii::$app->assetManager->getPublishedUrl($pathToImage);
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

    /**
     * @return string
     */
    protected function getThemePath()
    {
        return sprintf('@hiqdev/themes/%s', $this->name);
    }

    public function getDescription()
    {
        return $this->prepareContent('description');
    }

    public function getAuthor()
    {
        return $this->prepareContent('author');
    }

    public function getLicenseText()
    {
        return $this->prepareContent('licenseText');
    }

    /**
     * @param string $name Name of attribute
     * @return mixed|string
     */
    protected function prepareContent($name)
    {
        $out = '';
        $cacheAttributeName = '_' . $name;
        if (!$this->{$cacheAttributeName}) {
            $file = Yii::getAlias(sprintf('%s%s', $this->getThemePath(), $this->{$name}));
            if (file_exists($file)) {
                $fileType = StringHelper::endsWith($file, '.md');
                $content = file_get_contents($file);
                switch ($fileType) {
                    case '.md':
                        $out = Markdown::process($content, 'gfm');
                        break;
                }
            }
        } else {
            $out = $this->$cacheAttributeName;
        }

        return $out;
    }

}
