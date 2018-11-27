<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VmsLongVisit */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Durasi Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vms-long-visit-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
