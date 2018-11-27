<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VmsType */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Tipe Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vms-type-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
