<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dead */

$this->title = 'Create Dead';
$this->params['breadcrumbs'][] = ['label' => 'Deads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dead-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
