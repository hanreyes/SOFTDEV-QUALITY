<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmergencyContacts */

$this->title = 'Create Emergency Contacts';
$this->params['breadcrumbs'][] = ['label' => 'Emergency Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergency-contacts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
