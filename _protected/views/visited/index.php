<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VisitedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visited-index">

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
            //'visit_code',
            //'visit_date',
            //'visit_time',
            //'visit_long',
            //'employe_id',
            //'additional_info:ntext',
            [
                'attribute' => 'status',
                'value' => function($data){
                    switch ($data->status) {
                                    case 1:
                                        $vStatus = 'Disetujui';
                                        break;
                                    case 2:
                                        $vStatus = 'Ditolak';
                                        break;
                                    
                                    default:
                                        $vStatus = 'Pending';
                                        break;
                                }
                                return $vStatus;
                }
            ],

            //'created',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {approve} {reject}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-info-sign"></span>', $url, [
                                    'title' => Yii::t('app', 'Detail'),
                        ]);
                    },

                    'approve' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-check"></span>', $url, [
                                    'title' => Yii::t('app', 'Approve'),
                        ]);
                    },
                    
                    'reject' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, [
                                    'title' => Yii::t('app', 'Reject'),
                        ]);
                    }
                ],

                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'view') {
                        $url = [
                            'visited/view/', 
                            'id' => $key,
                        ];
                        return $url;
                    }

                    if ($action === 'approve') {
                        $url = [
                            'visited/approve/',
                            'id'=> $key,
                        ];
                        return $url;
                    }

                    if ($action === 'reject') {
                        $url = [
                            'visited/reject/',
                            'id'=> $key,
                        ];
                        return $url;
                    }
                }
            ]

        ],
    ]); ?>
</div>
