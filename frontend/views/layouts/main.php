<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\entities\Socials;
use common\entities\Contacts;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

$socials = Socials::getDb()->cache(function () {
    return Socials::find()->having(['status' => 1])->orderBy('sort')->all();
}, Yii::$app->params['cacheTime']);

$phones = Contacts::getDb()->cache(function () {
    return Contacts::find()->andWhere(['type' => 'phone'])->having(['status' => 1])->all();
}, Yii::$app->params['cacheTime']);

$emails = Contacts::getDb()->cache(function () {
    return Contacts::find()->andWhere(['type' => 'envelope'])->having(['status' => 1])->all();
}, Yii::$app->params['cacheTime']);

//$menuItems = [
//    ['label' => Yii::t('app', 'О нас'), 'url' => ['site/about']],
//    ['label' => Yii::t('app', 'Контакты'), 'url' => ['site/contacts']],
//];

?>

<?php $this->beginPage() ?>
<?php
$last_modified_time = getlastmod();
header("Cache-Control: public");
header("Expires: " . date("r", time()+10800));
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time){
    header('HTTP/1.1 304 Not Modified');
    die; /* убили всё, что ниже */
}
header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_modified_time).' GMT');
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ff0000">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body>
<?php $this->beginBody() ?>

<div id="main">
    <div id="top" class="container">
    <?= Alert::widget() ?>

    <div id="content" class="wrapper contentWrapper">
        <div id="mainNav">
            <?= $this->render('mainNav', [
//                'menuItems' => $menuItems,
                'phones' => $phones,
                'emails' => $emails,
            ]); ?>
        </div>
        <?= $content ?>
    </div>

    <?= $this->render('footer', [
        'socials' => $socials
    ]); ?>
    </div>
    <div id="popUp">
        <div class="closePopUp">x</div>
        <h2>Заказать консультацию</h2>
        <div id="ajaxWrapper" class="wrapper">
        </div>
    </div>

    <div id="popUpReview">
        <div class="closePopUpRev">x</div>
        <h2>Оставить отзыв</h2>
        <div id="ajaxWrapperReview" class="wrapper">
        </div>
    </div>


</div>

<!-- Bootstrap 4 локально -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Карта -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0a54iXTAJxdCSlGwbMJoB1FHTrB1J1WE&callback=initMap" async defer></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
