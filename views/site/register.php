<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-register">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],]]); ?>

        <?= $form->field($model, 'first_name')->textInput() ?>
        <?= $form->field($model, 'last_name')->textInput() ?>
        <?= $form->field($model, 'phone_number')->textInput() ?>
        <?= $form->field($model, 'email_address')->input('email') ?>
        <?= $form->field($model, 'password_hash')->passwordInput() ?>


    <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-register -->
