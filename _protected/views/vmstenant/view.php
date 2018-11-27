<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VmsTenant */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vms Tenants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vms-tenant-view">

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'name',
            'open',
            'close',
            'phone',
            'email',
            'profile:ntext',
            // 'picture:ntext',
            'address:ntext',
        ],
    ]) ?>

</div>
