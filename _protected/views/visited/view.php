<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Visited */

$this->title = $model->visit_code;
$this->params['breadcrumbs'][] = ['label' => 'Visiteds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visited-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
            'email',
            // 'photo:ntext',
            'address',
            'visit_code',
            'visit_date',
            // 'visit_time',
            'visit_long',
            'employe_id',
            'additional_info:ntext',
            // 'status',
            'created',
        ],
    ]) ?>

</div>
