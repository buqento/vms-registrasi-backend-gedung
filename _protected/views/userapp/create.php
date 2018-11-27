<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserApp */

$this->title = 'Create User App';
$this->params['breadcrumbs'][] = ['label' => 'User Apps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-app-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
