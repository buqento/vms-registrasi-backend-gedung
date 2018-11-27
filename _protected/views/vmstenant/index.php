<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VmstenantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tenant';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vms-tenant-index">

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
            'open',
            'close',
            'phone',
            'email',
            //'profile:ntext',
            //'picture:ntext',
            //'address:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
