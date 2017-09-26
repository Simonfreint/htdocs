<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- JQUERY LIBERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <!-- BOOTSTRAP -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- APPEAR JS  -->
        <script src="js/jquery.appear.js"></script>
        <!-- WAYPOINTS -->
        <script src="js/waypoints.min.js"></script>
        <!-- CUSTOM JS -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- ISOTOPE -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- PRETTY PHOTO -->
        <script src="js/jquery.prettyPhoto.js"></script>
        <!-- OWL CAROSEL -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- WOW JS -->
        <script src="js/wow.min.js"></script>
        <!-- CUSTOM JS -->
        <script src="js/custom.js"></script>
</head>
<body>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>


</body>
</html>
<?php $this->endPage() ?>
