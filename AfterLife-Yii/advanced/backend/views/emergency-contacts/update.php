<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmergencyContacts */

$this->title = 'Update Emergency Contacts: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Emergency Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emergency-contacts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
