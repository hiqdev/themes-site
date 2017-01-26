<?php

namespace hiqdev\themes\site\controllers;

use dosamigos\arrayquery\ArrayQuery;
use hiqdev\themes\site\models\Theme;
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
        return $this->render('index', ['models' => $this->getModels()->find()]);
    }

    public function actionCatalog($type = null)
    {
        $models = $this->getModels()->addCondition('type', $type)->find();
        if ($type && in_array($type, array_keys(Theme::getTypes()))) {
            $models = $this->getModels()->addCondition('type', $type)->find();
        }
        $dataProvider = new ArrayDataProvider([
            'allModels' => $models,
        ]);

        return $this->render('catalog', [
            'dataProvider' => $dataProvider,
            'type' => $type,
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
        return new ArrayQuery($this->themeRepository->getThemes());
    }

    protected function getModel($name)
    {
        $model = $this->getModels()->addCondition('name', $name)->one();

        return $model;
    }
}
