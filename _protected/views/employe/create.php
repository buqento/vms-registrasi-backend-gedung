<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Employe */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Karyawan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employe-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
