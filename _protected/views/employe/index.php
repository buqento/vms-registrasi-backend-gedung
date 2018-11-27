<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Karyawan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employe-index">

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'attribute' => 'vms_tenant_id',
                'value' => function($data){
                    return $data->tenant->name;
                }
            ],
            'name',
            'email',
            'phone',
            'position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
