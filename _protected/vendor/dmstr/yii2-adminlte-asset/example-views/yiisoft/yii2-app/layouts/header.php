<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">Lapas Cibinong</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
            
                <?php if(Yii::$app->user->isGuest){ ?>
                    <li><?= Html::a('Login', ['/site/login']) ?></li>
                <?php }else{ ?>
                    <li>
                        <?= Html::a('Keluar (' . Yii::$app->user->identity->username . ')', ['/site/logout'], ['data-method' => 'post'] ) ?>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </nav>
</header>
