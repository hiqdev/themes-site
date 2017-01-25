<?php

use hiqdev\themes\site\models\Theme;
use yii\widgets\ListView;
use yii\widgets\Menu;

if ($type) {
    $this->title = Theme::getTypes()[$type];
    $this->params['breadcrumbs'][] = ['label' =>Yii::t('hiqdev:themes', 'Catalog'), 'url' => ['/theme/catalog']];
    $this->params['breadcrumbs'][] = $this->title;
} else {
    $this->title = Yii::t('hiqdev:themes', 'Catalog');
    $this->params['breadcrumbs'][] = $this->title;
}

?>

<div class="col-md-3">

    <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
            <h3 class="panel-title"><?= Yii::t('hiqdev:themes', 'Template types') ?></h3>
        </div>

        <div class="panel-body">
            <?= Menu::widget([
                'items' => Theme::getTypesMenuItems(),
                'options' => [
                    'class' => 'nav nav-pills nav-stacked category-menu',
                ],
            ]) ?>
        </div>
    </div>
</div>
<div class="col-md-9">
    <?= ListView::widget([
        'layout' => "{items}\n{pager}",
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'row products',
        ],
        'itemView' => '_item',
        'itemOptions' => [
            'class' => 'col-md-4 col-sm-6',
        ],
        'emptyTextOptions' => ['class' => 'box'],
    ]) ?>
</div>
