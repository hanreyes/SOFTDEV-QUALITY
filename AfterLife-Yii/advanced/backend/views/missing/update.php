<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Missing */

$this->title = 'Update Missing: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Missings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'post_id' => $model->post_id, 'post_user_id' => $model->post_user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="missing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
