<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Volunteer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="volunteer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'volunteer_experience')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'educational_attainment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'availability')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serve_more_than_one')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'driver_license')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'convicted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conviction_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'physical_limitation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'limitation_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
