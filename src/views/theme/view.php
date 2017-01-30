<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->label;
$this->params['breadcrumbs'][] = ['label' => Yii::t('hiqdev:themes', 'Catalog'), 'url' => ['/theme/catalog']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="col-md-3">
    <div class="panel panel-default sidebar-menu">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Yii::t('hiqdev:themes', 'Theme details') ?></h3>
        </div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'label',
                    [
                        'attribute' => 'author',
                        'value' => $model->getAuthor(),
                        'format' => 'html',
                    ],
                    'bootstrap',
                    [
                        'attribute' => 'license',
                        'value' => function () use ($model) {
                            return Html::a($model->license, ['#' => 'license'], ['class' => 'scroll-to']);
                        },
                        'format' => 'html',
                    ],
                    'type',
                ]
            ]) ?>
        </div>
    </div>
</div>
<div class="col-md-9">
    <div class="row" id="productMain">
        <div class="col-sm-6">
            <div id="mainImage">
                <?= Yii::$app->thumbnail->img($model->image, Yii::$app->params['thumb.detail'], ['class' => 'img-responsive']) ?>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="box">
                <h1 class="text-center"><?= $model->label ?></h1>
                <p class="goToDescription">
                    <?= Html::a(Yii::t('hiqdev:themes', 'Scroll to product details, material &amp; care and sizing'), ['#' => 'details'], ['class' => 'scroll-to']) ?>
                </p>
                <?php if ($model->price !== 0) : ?>
                    <p class="price"><?= Yii::$app->formatter->asCurrency($model->price, 'usd') ?></p>
                <?php endif ?>
                <p class="text-center buttons">
                    <?php if ($model->price !== 0) : ?>
                        <?= Html::a('<i class="fa fa-shopping-cart"></i> ' . Yii::t('hiqdev:themes', 'Add to cart'), '#', [
                            'class' => 'btn btn-primary',
                        ]) ?>
                    <?php endif ?>
                    <?= Html::a('<i class="fa fa-magic"></i> ' . Yii::t('hiqdev:themes', 'Live Preview'), '#', [
                        'class' => 'btn btn-default',
                    ]) ?>
                </p>
            </div>
            <?php if ($model->getImages()) : ?>
                <div class="row" id="thumbs">
                    <?php foreach ($model->getImages() as $src) : ?>
                        <div class="col-xs-4">
                            <a href="<?= $src ?>" class="thumb">
                                <?= Html::img($src, ['class' => 'img-responsive']) ?>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </div>
    </div>

    <div class="box" id="details">
        <h3><?= Yii::t('hiqdev:themes', 'Product details') ?></h3>
        <?= $model->getDescription() ?>
        <div class="social">
            <h4><?= Yii::t('hiqdev:themes', 'Show it to your friends') ?></h4>
            <p>
                <a href="#" class="external facebook" data-animate-hover="pulse" style="opacity: 1;"><i
                        class="fa fa-facebook"></i></a>
                <a href="#" class="external gplus" data-animate-hover="pulse" style="opacity: 1;"><i
                        class="fa fa-google-plus"></i></a>
                <a href="#" class="external twitter" data-animate-hover="pulse" style="opacity: 1;"><i
                        class="fa fa-twitter"></i></a>
                <a href="#" class="email" data-animate-hover="pulse" style="opacity: 1;"><i class="fa fa-envelope"></i></a>
            </p>
        </div>
    </div>

    <div id="usage" class="box">
        <h3><?= Yii::t('hiqdev:themes', 'Usage') ?></h3>

    </div>

    <div id="license" class="box">
        <h3><?= Yii::t('hiqdev:themes', 'License') ?></h3>
        <?= $model->getLicenseText() ?>
    </div>
</div>
