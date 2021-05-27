<?php

use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $user \common\entities\User */

$user = Yii::$app->user->identity;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $user->getAvatar('/files/anonymous.jpg') ?>"
                     class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= $user->getPublicIdentity() ?></p>
                <a href="<?php echo Url::to(['/sign-in/profile']) ?>">
                    <i class="fa fa-circle text-success"></i>
                    <?php echo Yii::$app->formatter->asDatetime(time()) ?>
                </a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Редактор', 'options' => ['class' => 'header']],
//                    ['label' => 'Файл-менеджер', 'icon' => 'file-image-o', 'url' => ['/file-manager']],
//                    ['label' => 'Модули', 'icon' => 'file-code-o', 'active' => (Yii::$app->controller->id == 'modules'), 'url' => ['/modules']],
                    ['label' => 'Преимущества', 'icon' => 'thumbs-up', 'active' => (Yii::$app->controller->id == 'advantages'), 'url' => ['/advantages']],
                    ['label' => 'Автомобили', 'icon' => 'ambulance', 'active' => (Yii::$app->controller->id == 'automobiles'), 'url' => ['/automobiles']],
                    ['label' => 'Наши цены', 'icon' => 'rub', 'active' => (Yii::$app->controller->id == 'prices'), 'url' => ['/prices']],
                    ['label' => 'Отзывы', 'icon' => 'user-circle', 'active' => (Yii::$app->controller->id == 'reviews'), 'url' => ['/reviews']],
                    ['label' => 'Контакты', 'icon' => 'address-book-o', 'active' => (Yii::$app->controller->id == 'contacts'), 'url' => ['/contacts']],
                    ['label' => 'Соцсети', 'icon' => 'facebook', 'active' => (Yii::$app->controller->id == 'socials'), 'url' => ['/socials']],
                ]
            ]
        ) ?>
    </section>
</aside>
