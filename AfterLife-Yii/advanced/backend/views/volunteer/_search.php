<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VolunteerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="volunteer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'volunteer_experience') ?>

    <?= $form->field($model, 'occupation') ?>

    <?= $form->field($model, 'educational_attainment') ?>

    <?php // echo $form->field($model, 'availability') ?>

    <?php // echo $form->field($model, 'serve_more_than_one') ?>

    <?php // echo $form->field($model, 'driver_license') ?>

    <?php // echo $form->field($model, 'convicted') ?>

    <?php // echo $form->field($model, 'conviction_reason') ?>

    <?php // echo $form->field($model, 'physical_limitation') ?>

    <?php // echo $form->field($model, 'limitation_description') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
