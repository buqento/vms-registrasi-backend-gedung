<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\VmsTenant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vms-tenant-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput() ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'open')->widget(TimePicker::className(), []) ?>

            <?= $form->field($model, 'close')->widget(TimePicker::className(), []) ?>

        </div>

        <div class="col-md-6">

            <?= $form->field($model, 'picture')->fileInput() ?>

            <?= $form->field($model, 'profile')->textarea(['rows' => 3]) ?>

            <?= $form->field($model, 'address')->textarea(['rows' => 3]) ?>
            
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
