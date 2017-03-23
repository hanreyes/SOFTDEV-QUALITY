<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DeadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dead-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'post_id') ?>

    <?= $form->field($model, 'post_user_id') ?>

    <?= $form->field($model, 'submission_id') ?>

    <?= $form->field($model, 'general_condition') ?>

    <?php // echo $form->field($model, 'body_part_found') ?>

    <?php // echo $form->field($model, 'body_condition') ?>

    <?php // echo $form->field($model, 'apparent_sex') ?>

    <?php // echo $form->field($model, 'age_group') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'hair_length') ?>

    <?php // echo $form->field($model, 'hair_color') ?>

    <?php // echo $form->field($model, 'facial_hair_type') ?>

    <?php // echo $form->field($model, 'facial_hair_length') ?>

    <?php // echo $form->field($model, 'facial_hair_color') ?>

    <?php // echo $form->field($model, 'distinguishing_features') ?>

    <?php // echo $form->field($model, 'scar_location') ?>

    <?php // echo $form->field($model, 'tattoo_location') ?>

    <?php // echo $form->field($model, 'birthmark_location') ?>

    <?php // echo $form->field($model, 'mole_location') ?>

    <?php // echo $form->field($model, 'upper_garment') ?>

    <?php // echo $form->field($model, 'upper_garment_color') ?>

    <?php // echo $form->field($model, 'lower_garment') ?>

    <?php // echo $form->field($model, 'lower_garment_color') ?>

    <?php // echo $form->field($model, 'footwear') ?>

    <?php // echo $form->field($model, 'eyewear') ?>

    <?php // echo $form->field($model, 'galsses_color') ?>

    <?php // echo $form->field($model, 'contact_lens_color') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
