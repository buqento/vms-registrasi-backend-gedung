<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserappSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengunjung';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-app-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            [
                'attribute' => 'vms_type_id',
                'value' => function($data){
                    return $data->type->title;
                }
            ],
            'id_number',
            'gender',
            'phone',
            //'email:email',
            //'photo:ntext',
            //'address',
            //'username',
            //'password',
            //'authKey',
            //'created',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}'
            ],
        ],
    ]); ?>
</div>
