<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MissingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="missing-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'post_id') ?>

    <?= $form->field($model, 'post_user_id') ?>

    <?= $form->field($model, 'submission_id') ?>

    <?= $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'middle_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'occupation') ?>

    <?php // echo $form->field($model, 'date_of_disappearance') ?>

    <?php // echo $form->field($model, 'time_of_disappearance') ?>

    <?php // echo $form->field($model, 'last_seen') ?>

    <?php // echo $form->field($model, 'relationship_with_person') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'eye_color') ?>

    <?php // echo $form->field($model, 'hair_length') ?>

    <?php // echo $form->field($model, 'hair_color') ?>

    <?php // echo $form->field($model, 'facial_hair') ?>

    <?php // echo $form->field($model, 'facial_hair_color') ?>

    <?php // echo $form->field($model, 'facial_hair_length') ?>

    <?php // echo $form->field($model, 'ear_shape') ?>

    <?php // echo $form->field($model, 'eyebrows_size') ?>

    <?php // echo $form->field($model, 'nose_size') ?>

    <?php // echo $form->field($model, 'hand_size') ?>

    <?php // echo $form->field($model, 'feet_size') ?>

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

    <?php // echo $form->field($model, 'glasses_color') ?>

    <?php // echo $form->field($model, 'contact_lens_color') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
