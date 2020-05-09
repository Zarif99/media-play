<?php

/* @var $this \yii\web\View */
/* @var $content string */
/** @var TYPE_NAME $film */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
$this->title = "MediaPlay";
yii::$app->name = "MediaPlay";
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="wrap">

    <div id="shell">
        <div id="header">
            <h1 id="logo"><a href="index">MediaPlay</a></h1>
            <div class="social"> <span>FOLLOW US ON:</span>
                <ul>
                    <li><a class="facebook" href="https://www.facebook.com/">facebook</a></li>

                    <li><a class="rss" href="https://rss.com/">rss</a></li>
                </ul>
            </div>
            <div id="navigation">
                <ul>
                    <li><a class="active" href="/site/index">HOME</a></li>
<!--                    <li><a href="/site/about">ABOUT US</a></li>-->
<!--                    <li><a href="/site/contact">CONTACT</a></li>-->
<!--                    <li><a href="/site/signup">SIGN UP</a></li>-->
<!--                    <li><a href="/site/login">LOG IN</a></li>-->
                </ul>
            </div>
            <div id="sub-navigation">
                <ul>
                    <li><a href="index">SHOW ALL</a></li>
<!--                    <li><a href="index">LATEST TRAILERS</a></li>-->
<!--                    <li><a href="index">TOP RATED</a></li>-->
<!--                    <li><a href="index">MOST COMMENTED</a></li>-->
                </ul>
                <div id="search">
                    <form action="index" method="get" accept-charset="utf-8">
                        <label for="search-field">SEARCH</label>
                        <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
                        <input type="submit" value="GO!" class="search-button" />
                    </form>
                </div>
            </div>
        </div>
        <div id="main">
            <div id="content">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
        <div id="footer">
            <p class="lf">Copyright &copy; 2020 <a href="index">MediaPlay</a> - All Rights Reserved</p>

            <div style="clear:both;"></div>
        </div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
