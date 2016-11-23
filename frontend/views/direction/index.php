<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DirectionRecherche */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Directions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direction-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Direction', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'direction_id',
            'lib_court',
            'lib_long',
            'dependance',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
