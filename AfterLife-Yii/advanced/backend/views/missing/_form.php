<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Missing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="missing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'post_id')->textInput() ?>

    <?= $form->field($model, 'post_user_id')->textInput() ?>

    <?= $form->field($model, 'submission_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marital_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_disappearance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_of_disappearance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_seen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relationship_with_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eye_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hair_length')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hair_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facial_hair')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facial_hair_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facial_hair_length')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ear_shape')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eyebrows_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nose_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hand_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'feet_size')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'glasses_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_lens_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
