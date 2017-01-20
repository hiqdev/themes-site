<?php

use yii\widgets\ListView;

$this->title = Yii::t('hiqdev:themes', 'Catalog');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="col-md-3">
    <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
            <h3 class="panel-title">Categories</h3>
        </div>

        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">
                <li>
                    <a href="category.html">Men <span class="badge pull-right">42</span></a>
                    <ul>
                        <li><a href="category.html">T-shirts</a>
                        </li>
                        <li><a href="category.html">Shirts</a>
                        </li>
                        <li><a href="category.html">Pants</a>
                        </li>
                        <li><a href="category.html">Accessories</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="category.html">Ladies  <span class="badge pull-right">123</span></a>
                    <ul>
                        <li><a href="category.html">T-shirts</a>
                        </li>
                        <li><a href="category.html">Skirts</a>
                        </li>
                        <li><a href="category.html">Pants</a>
                        </li>
                        <li><a href="category.html">Accessories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="category.html">Kids  <span class="badge pull-right">11</span></a>
                    <ul>
                        <li><a href="category.html">T-shirts</a>
                        </li>
                        <li><a href="category.html">Skirts</a>
                        </li>
                        <li><a href="category.html">Pants</a>
                        </li>
                        <li><a href="category.html">Accessories</a>
                        </li>
                    </ul>
                </li>

            </ul>

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
        ]
    ]) ?>
</div>
