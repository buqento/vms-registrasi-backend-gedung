<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VmsTenant */

$this->title = 'Update Data';
$this->params['breadcrumbs'][] = ['label' => 'Tenant', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vms-tenant-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
