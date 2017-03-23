<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReferencesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'References';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="references-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create References', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'relationship_with_person',
            'phone_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
