<?php


namespace hiqdev\themes\site\repositories;

use hiqdev\themes\site\models\Theme;
use Yii;

class ThemeRepository
{
    public function getThemes()
    {
        $out = [];
        $items = Yii::$app->get('themeManager')->getItems();

        foreach ($items as $item) {
            $attributes = get_object_vars($item);
            $model = new Theme();
            $model->setAttributes($attributes, false);
            $out[] = $model;
        }

        return $out;
    }
}
