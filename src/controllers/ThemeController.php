<?php

namespace hiqdev\themes\site\controllers;

use hiqdev\themes\site\repositories\ThemeRepository;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class ThemeController extends Controller
{
    /**
     * @var ThemeRepository
     */
    private $themeRepository;

    public function __construct($id, $module, ThemeRepository $themeRepository, $config = [])
    {
        $this->themeRepository = $themeRepository;
        parent::__construct($id, $module, $config = []);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCatalog()
    {
        $models = $this->themeRepository->getThemes();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $models,
        ]);

        return $this->render('catalog', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
