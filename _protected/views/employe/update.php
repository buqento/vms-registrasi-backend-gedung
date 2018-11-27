<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employe */

$this->title = 'Ubah Data';
$this->params['breadcrumbs'][] = ['label' => 'Karyawan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="employe-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
