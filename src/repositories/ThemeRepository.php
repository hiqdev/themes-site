<?php


namespace hiqdev\themes\site\repositories;

use hiqdev\themes\site\models\Theme;
use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class ThemeRepository
{
    public function getThemes()
    {
        $out = [];
        $items = Yii::$app->get('themeManager')->getItems();

        foreach ($items as $item) {
            $out[] = $this->getModel($item);
        }

        return $out;
    }

    /**
     * @param \hiqdev\thememanager\Theme $theme
     * @return Model
     */
    protected function getModel(\hiqdev\thememanager\Theme $theme)
    {
        $attributes = $theme->getDetailedTheme()->getAttributes();
        $model = new Theme();
        $model->setAttributes($attributes, false);

        return $model;
    }
}
