<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dead */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dead-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'post_id')->textInput() ?>

    <?= $form->field($model, 'post_user_id')->textInput() ?>

    <?= $form->field($model, 'submission_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'general_condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_part_found')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apparent_sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hair_length')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hair_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facial_hair_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facial_hair_length')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facial_hair_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'distinguishing_features')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scar_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tattoo_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthmark_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mole_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upper_garment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upper_garment_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lower_garment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lower_garment_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'footwear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eyewear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'galsses_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_lens_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
