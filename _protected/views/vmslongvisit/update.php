<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VmsLongVisit */

$this->title = 'Ubah Data';
$this->params['breadcrumbs'][] = ['label' => 'Durasi Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="vms-long-visit-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
