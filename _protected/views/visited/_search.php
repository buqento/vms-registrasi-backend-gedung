<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VisitedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visited-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'vms_type_id') ?>

    <?= $form->field($model, 'id_number') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'visit_code') ?>

    <?php // echo $form->field($model, 'visit_date') ?>

    <?php // echo $form->field($model, 'visit_time') ?>

    <?php // echo $form->field($model, 'visit_long') ?>

    <?php // echo $form->field($model, 'employe_id') ?>

    <?php // echo $form->field($model, 'additional_info') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
