<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Visited */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="visited-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vms_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visit_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visit_date')->textInput() ?>

    <?= $form->field($model, 'visit_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visit_long')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employe_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'additional_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
