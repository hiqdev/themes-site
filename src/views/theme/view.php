<?php

use yii\helpers\Html;

$this->title = $model->label;
$this->params['breadcrumbs'][] = ['label' => Yii::t('hiqdev:themes', 'Catalog'), 'url' => ['/theme/catalog']];
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="col-md-12">
    <div class="row" id="productMain">
        <div class="col-sm-6">
            <div id="mainImage">
                <?= Html::img($model->image, ['class' => 'img-responsive']) ?>
            </div>

            <div class="ribbon sale">
                <div class="theribbon">SALE</div>
                <div class="ribbon-background"></div>
            </div>
            <!-- /.ribbon -->

            <div class="ribbon new">
                <div class="theribbon">NEW</div>
                <div class="ribbon-background"></div>
            </div>
            <!-- /.ribbon -->

        </div>

        <div class="col-sm-6">
            <div class="box">
                <h1 class="text-center"><?= $model->label ?></h1>
                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material
                        &amp; care and sizing</a>
                </p>
                <p class="price">$124.00</p>

                <p class="text-center buttons">
                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                    <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                </p>
            </div>
            <?php if ($model->images) : ?>
                <div class="row" id="thumbs">
                    <?php foreach ($model->images as $src) : ?>
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
        <h4><?= Yii::t('hiqdev:themes', 'Product details') ?></h4>

        <?= $model->description ?>

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
</div>
