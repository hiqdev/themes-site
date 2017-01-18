<?php

namespace hiqdev\themes\site\controllers;

use yii\web\Controller;

class ThemeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCatalog()
    {
        return $this->render('catalog');
    }
}
