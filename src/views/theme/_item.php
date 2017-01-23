<?php

/** @var \hiqdev\themes\site\models\Theme $model */

use yii\helpers\Html;
use yii\helpers\Url;


?>
<div class="product">
    <div class="flip-container">
        <div class="flipper">
            <div class="front">
                <a href="<?= Url::to($model->link) ?>">
                    <?= Html::img($model->image, ['class' => 'img-responsive']) ?>
                </a>
            </div>
            <div class="back">
                <a href="<?= Url::to($model->link) ?>">
                    <?= Html::img($model->image, ['class' => 'img-responsive']) ?>
                </a>
            </div>
        </div>
    </div>
    <a href="<?= Url::to($model->link) ?>" class="invisible">
        <?= Html::img($model->image, ['class' => 'img-responsive']) ?>
    </a>
    <div class="text">
        <h3><?= Html::a($model->label, $model->link) ?></h3>
        <p class="buttons">
            <?= Html::a(Yii::t('hiqdev:themes', 'View detail'), $model->link, ['class' => 'btn btn-default']) ?>
        </p>
    </div>
</div>
