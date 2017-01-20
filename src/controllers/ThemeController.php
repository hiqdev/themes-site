<?php

namespace hiqdev\themes\site\controllers;

use hiqdev\themes\site\repositories\ThemeRepository;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

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

    public function actionView($name)
    {
        $model = $this->getModel($name);
        if ($model) {
            return $this->render('view', compact('model'));
        } else {
            throw new NotFoundHttpException('Page not found');
        }
    }

    protected function getModels()
    {
        return $this->themeRepository->getThemes();
    }

    protected function getModel($name)
    {
        return reset(array_filter($this->getModels(), function ($model) use (&$name) {
            return $model->name === $name;
        }));
    }
}
