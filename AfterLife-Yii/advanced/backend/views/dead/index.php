<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DeadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dead-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dead', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'post_id',
            'post_user_id',
            'submission_id',
            'general_condition',
            // 'body_part_found',
            // 'body_condition',
            // 'apparent_sex',
            // 'age_group',
            // 'height',
            // 'weight',
            // 'hair_length',
            // 'hair_color',
            // 'facial_hair_type',
            // 'facial_hair_length',
            // 'facial_hair_color',
            // 'distinguishing_features',
            // 'scar_location',
            // 'tattoo_location',
            // 'birthmark_location',
            // 'mole_location',
            // 'upper_garment',
            // 'upper_garment_color',
            // 'lower_garment',
            // 'lower_garment_color',
            // 'footwear',
            // 'eyewear',
            // 'galsses_color',
            // 'contact_lens_color',
            // 'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
