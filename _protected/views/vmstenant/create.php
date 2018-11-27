<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VmsTenant */

$this->title = 'Tambah Data';
$this->params['breadcrumbs'][] = ['label' => 'Tenant', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vms-tenant-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
