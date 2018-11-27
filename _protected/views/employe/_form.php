<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\VmsTenant;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Employe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $tenants = VmsTenant::find()->select('name')->indexBy('id')->column(); 
    ?>
    <?= $form->field($model, 'vms_tenant_id')->widget(Select2::className(),['data' => $tenants]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
