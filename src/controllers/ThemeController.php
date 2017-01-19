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
        return $this->render('index', ['models' => $this->getModels()]);
    }

    public function actionCatalog()
    {
        $dataProvider = new ArrayDataProvider([
            'allModels' => $this->getModels(),
        ]);

        return $this->render('catalog', [
            'dataProvider' => $dataProvider,
        ]);
    }

    protected function getModels()
    {
        return $this->themeRepository->getThemes();
    }
}
