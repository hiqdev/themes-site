<?php

use hiqdev\themes\obaju\widgets\BannerCarousel;
use hiqdev\themes\obaju\widgets\GoodsCarousel;
use yii\helpers\Html;

$this->title = Yii::$app->name;

?>

<div class="container">
    <div class="col-sm-12">
        <?= BannerCarousel::widget([
            'items' => $models,
            'formatter' => function ($model) {
                return Html::img($model->image, ['class' => 'img-responsive']);
            }
        ]) ?>
    </div>
</div>

<div id="advantages">

    <div class="container">
        <div class="same-height-row">
            <div class="col-sm-4">
                <div class="box same-height clickable" style="height: 168px;">
                    <div class="icon"><i class="fa fa-heart"></i>
                    </div>

                    <h3><a href="#">We love our customers</a></h3>
                    <p>We are known to provide best possible service ever</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height clickable" style="height: 168px;">
                    <div class="icon"><i class="fa fa-tags"></i>
                    </div>

                    <h3><a href="#">Best prices</a></h3>
                    <p>You can check that the height of the boxes adjust when longer text like this one is used in one
                        of them.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height clickable" style="height: 168px;">
                    <div class="icon"><i class="fa fa-thumbs-up"></i>
                    </div>

                    <h3><a href="#">100% satisfaction guaranteed</a></h3>
                    <p>Free returns on everything for 3 months.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>


<div id="hot">

    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>Hot this week</h2>
            </div>
        </div>
    </div>

    <div class="container">

        <?= GoodsCarousel::widget([
            'items' => $models,
            'formatter' => function ($model) {
                return '<div class="item">' . $this->render('_item', compact('model')) . '</div>';
            }
        ]) ?>
    </div>
</div>


<div class="box text-center animated fadeInUp" data-animate="fadeInUp" style="opacity: 0;">
    <div class="container">
        <div class="col-md-12">
            <h3 class="text-uppercase">From our blog</h3>

            <p class="lead">What's new in the world of fashion? <a href="blog.html">Check our blog!</a>
            </p>
        </div>
    </div>
</div>

<div class="box text-center" data-animate="fadeInUp">
    <div class="container">
        <div class="col-md-12">
            <h3 class="text-uppercase">From our blog</h3>

            <p class="lead">What's new in the world of fashion? <a href="blog.html">Check our blog!</a>
            </p>
        </div>
    </div>
</div>

<div class="container">

    <div class="col-md-12" data-animate="fadeInUp">

        <div id="blog-homepage" class="row">
            <div class="col-sm-6">
                <div class="post">
                    <h4><a href="post.html">Fashion now</a></h4>
                    <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                    </p>
                    <hr>
                    <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                        Donec eu libero sit amet quam egestas semper. Aenean
                        ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                    </p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="post">
                    <h4><a href="post.html">Who is who - example blog post</a></h4>
                    <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                    </p>
                    <hr>
                    <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                        Donec eu libero sit amet quam egestas semper. Aenean
                        ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>
