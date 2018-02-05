<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?php echo Yii::$app->name; ?></h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

    </div>

    <div class="row">
        <?php foreach ($items as $item): ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $item->imageUrl ?>" alt="Lights" style="min-height: 300px; max-height: 300px">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?=$item->nama?></h4>
                    <p class="group inner list-group-item-text">
                        <?=$item->category->name?:'No Category'?>
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                <?=$item->priceRp?></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <?php
                            if (Yii::$app->user->isGuest)
                                echo Html::a('Log in first',['/site/login'],['class'=>'btn btn-warning']);
                            else
                                echo Html::a('Add to cart',['/site/checkout'],['class'=>'btn btn-success']);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


    
</div>
