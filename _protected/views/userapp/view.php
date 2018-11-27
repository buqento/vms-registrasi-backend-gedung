<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserApp */

$this->title = $model->id_number;
$this->params['breadcrumbs'][] = ['label' => 'User Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-app-view">

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
            'username',
            // 'password',
            // 'authKey',
            'created:datetime',
        ],
    ]) ?>

</div>
