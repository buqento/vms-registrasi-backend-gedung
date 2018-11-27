<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VmsType */

$this->title = 'Ubah Data';
$this->params['breadcrumbs'][] = ['label' => 'Tipe Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="vms-type-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
