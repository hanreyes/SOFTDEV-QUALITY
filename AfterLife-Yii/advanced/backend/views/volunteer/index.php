<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VolunteerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Volunteers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Volunteer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'address',
            'volunteer_experience',
            'occupation',
            'educational_attainment',
            // 'availability',
            // 'serve_more_than_one',
            // 'driver_license',
            // 'convicted',
            // 'conviction_reason',
            // 'physical_limitation',
            // 'limitation_description',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
