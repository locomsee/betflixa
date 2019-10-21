<?php

/* @var $this yii\web\View */

$this->title = 'BETFLIX';
?>
<div class="site-index">
    <?php if (Yii::$app->session->getFlash('message')): ?>
        <div class="row alert-<?= Yii::$app->session->getFlash('message')?>"
             style="padding: 10px; margin: 2px; border-radius: 5px;">
            <?= Yii::$app->session->getFlash('message') ?>
        </div>
    <?php endif; ?>
    <div class="jumbotron">
        <h1>BETFLIX</h1>




    </div>


</div>
