<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Visited */

$this->title = 'Update Visited: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Visiteds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="visited-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
