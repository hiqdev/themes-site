<?php

namespace hiqdev\themes\site\models;

use Yii;
use yii\base\Model;

class Theme extends Model
{
    public $label;
    public $name;
    public $description;
    public $screenshot;

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
}
