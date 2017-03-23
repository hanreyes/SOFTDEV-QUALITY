<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Volunteer */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'user_id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'address',
            'volunteer_experience',
            'occupation',
            'educational_attainment',
            'availability',
            'serve_more_than_one',
            'driver_license',
            'convicted',
            'conviction_reason',
            'physical_limitation',
            'limitation_description',
            'user_id',
        ],
    ]) ?>

</div>
