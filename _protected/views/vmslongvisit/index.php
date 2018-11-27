<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VmslongvisitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Durasi Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vms-long-visit-index">

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
