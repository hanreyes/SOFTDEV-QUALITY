<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmergencyContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Emergency Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergency-contacts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Emergency Contacts', ['create'], ['class' => 'btn btn-success']) ?>
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
