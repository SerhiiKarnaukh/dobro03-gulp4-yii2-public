<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $advantages \common\entities\Advantages[] */
/* @var $automobiles \common\entities\Automobiles[] */
/* @var $prices \common\entities\Prices[] */
/* @var $reviews \common\entities\Reviews[] */
/* @var $contacts \common\entities\Contacts[] */

foreach ($contacts as $contact) {
    if ($contact->type == 'point') {
        $addresses[] = $contact;
    } elseif ($contact->type == 'phone') {
        $phones[] = $contact;
    } elseif ($contact->type == 'envelope') {
        $emails[] = $contact;
    }
}
?>
<div class="section-wrap">
    <div class="section-top">
        <div class="topInfo__wrap wrap ">
            <div class="topInfo">
                <h1 class="topInfo__title">Профессиональная служба <br> перевозки лежачих больных</h1>
                <p class="topInfo__desc">
                    <svg class="topInfo__svg">
                        <use xlink:href="/files/img/symbol/sprite.svg#cross-med-fill"/>
                    </svg>
                    Нам доверяют близких
                </p>
                <a href="#services" class="topInfo__more buttons">Узнать подробнее</a>
            </div>
        </div>
    </div>
    <div class="scroll-btn section-wrap__icon">
        <a href="#services">
            <svg class="section-wrap__img">
                <use xlink:href="/files/img/symbol/sprite.svg#arrow-down"/>
            </svg>
        </a>
    </div>
</div>

<div id="services" class="service jq_hidden">
    <div class="service__block">
        <p class="service__title">Услуги</p>
        <div class="service__element">
            <p>Перевозка</p>
            <p>Перевозка лежачих больных, людей с ограниченными возможностями по Москве, Московской Области и всей
                России (города уточняйте у оператора)</p>
            <p>Перевозка лежачих больных, людей с ограниченными возможностями из Московской области и других городов
                России в больницы города Москвы</p>
            <p>Перевозка лежачих больных, людей с ограниченными возможностями из больницы или пансионата домой, а также
                перевозка в пансионаты, хосписы, загородные дома</p>
            <div class="service__icon">
                <svg class="service__img">
                    <use xlink:href="/files/img/symbol/sprite.svg#plus-sign-in-a-black-circle"/>
                </svg>
            </div>
        </div>
        <div class="service__element">
            <p>Транспортировка</p>
            <p>Транспортировка из города в город по России (города уточняйте у оператора)</p>
            <p>Спуск/подъем на любой этаж</p>
            <div class="service__icon">
                <svg class="service__img">
                    <use xlink:href="/files/img/symbol/sprite.svg#plus-sign-in-a-black-circle"/>
                </svg>
            </div>
        </div>
        <div class="service__element">
            <p>Встреча в аэропортах</p>
            <p>Встреча в аэропортах и на вокзалах по всей России</p>
            <div class="service__icon">
                <svg class="service__img">
                    <use xlink:href="/files/img/symbol/sprite.svg#plus-sign-in-a-black-circle"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<div class="advantages">
    <div class="wrap advantages__wrap">
        <p class="advantages__title">Наши преимущества</p>
        <div class="devider advantages__devider">
            <p></p>
        </div>
    </div>
    <div class="advantages__block jq_hidden">
        <?php foreach ($advantages as $key => $advantage): ; ?>
            <?php $class = (in_array($key, [0, 1])) ? 'advantages__element' : 'advantages__element advantages__element--reverse'; ?>
            <div class="<?= $class; ?>">
                <div class="advantages__img">
                    <img src="<?= $advantage->image; ?>" alt="Dobro 03 перевозка лежачих больных | Комфорт |<?= $advantage->title; ?>">
                </div>
                <div class="advantages__text">
                    <p class="advantages__name"><?= $advantage->title; ?></p>
                    <?= $advantage->html; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="scheme">
    <div class="wrap">
        <p class="scheme__title">Схема работы</p>
        <div class="scheme__devider devider">
            <p></p>
        </div>
    </div>
    <div class="wrap scheme__block jq_hidden">

        <div class="scheme__element">
            <div class="scheme__icon">
                <svg class="scheme__img1">
                    <use xlink:href="/files/img/symbol/sprite.svg#telephone-handle-silhouette"/>
                </svg>
            </div>
            <p class="scheme__title">ВЫ ЗВОНИТЕ НАМ</p>

        </div>
        <div class="scheme__element">
            <div class="scheme__icon">
                <svg class="scheme__img2">
                    <use xlink:href="/files/img/symbol/sprite.svg#operator"/>
                </svg>
            </div>
            <p class="scheme__title">НАШ ОПЕРАТОР ОБРАБАТЫВАЕТ ВАШ ЗАКАЗ</p>

        </div>
        <div class="scheme__element">
            <div class="scheme__icon">
                <svg class="scheme__img3">
                    <use xlink:href="/files/img/symbol/sprite.svg#team"/>
                </svg>
            </div>
            <p class="scheme__title">ПОДБИРАЕМ БРИГАДУ</p>

        </div>
        <div class="scheme__element">
            <div class="scheme__icon">
                <svg class="scheme__img4">
                    <use xlink:href="/files/img/symbol/sprite.svg#check"/>
                </svg>
            </div>
            <p class="scheme__title">ПОДТВЕРЖДАЕМ ЗАКАЗ</p>

        </div>
    </div>
</div>

<div class="wrap team jq_hidden">
    <div class="team__left">
        <p class="team__title">Наша команда</p>
        <p><strong>Добро-03 </strong>— это высококлассные водители и санитары. Мы оказываем услуги транспортировки людям
            с ограниченными возможностями. Наш профиль - перевозка лежачих больных по Москве и области, из больницы —
            домой, в загородный дом и даже в гости. Мы отвезем вас в аэропорт и на вокзал, встретим по возвращении и
            доставим обратно домой.</p>
        <p>Мы не оказываем медицинскую помощь!</p>
        <p>Для транспортировки пациента в тяжелом состоянии следует обратиться к парамедикам.</p>
    </div>
    <div class="team__right">
        <img src="/files/img/team.webp" alt="Dobro 03 перевозка лежачих больных | Комфорт | Команда Dobro 03">
    </div>
</div>

<div class="wrap principles jq_hidden">
    <div class="principles__left">
        <img src="/files/img/care.webp" alt="Dobro 03 перевозка лежачих больных | Комфорт | Принципы работы Dobro 03">
    </div>
    <div class="principles__right">
        <p class="principles__title">Наши принципы</p>
        <ol>
            <li><strong>Качество.</strong> Квалифицированные санитары транспортируют клиента с соблюдением всех правил
                техники безопасности. Водители-профессионалы управляют автомобилями мягко и аккуратно. Мы доставим вас и
                вашего подопечного в указанное место точно в срок.
            </li>
            <li><strong>Комфорт.</strong> В услугу входит бесплатный час ожидания. Собирайтесь спокойно — мы вас ждем!
            </li>
            <li><strong>Доброта.</strong> Наш чуткий внимательный персонал всегда слышит и понимает клиента. Мы знаем,
                что вам непросто. Мы заботимся о каждом из вас.
            </li>
        </ol>
        Перевозка лежачих больных осуществляется по двум основным тарифам:
        <ul>
            <li><strong>Социальный-эконом</strong></li>
            <li><strong>Комфорт</strong></li>
        </ul>
    </div>
</div>

<div class="auto">
    <div class="wrap">
        <p class="auto__title">Наши автомобили</p>
        <div class="auto__devider devider">
            <p></p>
        </div>
        <div class="auto__block wrap-midle  jq_hidden">
            <div class="auto__left ideas">
                <div class="ideas__icon">
                    <svg class="ideas__img">
                        <use xlink:href="/files/img/symbol/sprite.svg#fastcar"/>
                    </svg>
                </div>
                <p class="ideas__title">Ваш комфорт - наша забота!</p>
                <p>Автопарк Добро-03 – это современные специально оборудованные автомобили. По тарифу Социальный-эконом
                    подается Lada Largus. Тариф Комфорт обслуживают автомобили марки Ford Connect и Ford Tranzit.</p>
                <p>Автомобили оснащены складными колясками и мягкими носилками. Специализированная складная
                    коляска-каталка сертифицирована МЧС. Она более маневренная, чем обычное кресло-каталка. Человек в
                    такой коляске комфортно помещается даже в тесный пассажирский лифт.</p>
                <p>В случае, если человек не может сидеть, мы используем мягкие носилки. Они оснащены ремнями
                    безопасности и имеют удобную конструкцию для переноски. Лежачему человеку в таких носилках комфортно
                    и безопасно. Эти носилки хорошо показали себя как в узких дверях старых подъездов, так и в тесных
                    коридорах «хрущевок».</p>
                <p>С Добро-03 вам открыты любые двери!</p>
            </div>
            <div class="auto__right">
                <div id="sliderFade" class="carousel slide carousel-fade" data-ride="carousel" >
                    <ol class="carousel-indicators">
                        <li data-target="#sliderFade" data-slide-to="0" class="active"></li>
                        <li data-target="#sliderFade" data-slide-to="1"></li>
                        <li data-target="#sliderFade" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php foreach ($automobiles as $key => $automobile): ; ?>
                            <div class="carousel-item  <?php if ($automobile->sort == 1) {
                                echo 'active';
                            } ?>">
                                <img src="<?= $automobile->image; ?>" class="d-block w-100" alt="Dobro 03 перевозка лежачих больных | Комфорт | <?= $automobile->title; ?>">
                                <div class="slide__text">
                                    <h3><?= $automobile->title; ?></h3>
                                    <p>Комфорт</p>
                                    <!--                                    <p>-->
                                    <? //= $automobile->comfort; ?><!--</p>                                   -->
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reviews">
    <div class="reviews__wrap wrap jq_hidden">
        <div class="reviews__slider ">
            <div class="sl ">
                <?php foreach ($reviews as $key => $review): ; ?>
                    <div class="reviews__element sl_slide">
                        <p class="reviews__title">"<?= $review->html; ?>"</p>
                        <p class="reviews__author"><?= $review->name; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="reviews__callback" id="openReviews">
            <div id="reviewsBtn">
                <a href="<?= Url::to(['site/review']);?>" id="reviews" class="ajaxLink">
                <svg class="reviews__callback--svg">
                    <use xlink:href="/files/img/symbol/sprite.svg#plus-black-symbol"/>
                </svg>
                Оставить отзыв
                </a>
            </div>
        </div>
    </div>
</div>

<div class="price">
    <div class="wrap price__wrap">
        <p class="price__title">Наши цены</p>
        <div class="devider price__devider">
            <p></p>
        </div>
    </div>
    <div id="prices" class="prices wrap-narrow jq_hidden">
        <?php foreach ($prices as $key => $price): ; ?>
            <div class="price__block">
                <div class="priceIcon">
                    <svg class="priceIconSvg">
                        <use xlink:href="/files/img/symbol/sprite.svg#plus-symbol-in-a-rounded-black-square"/>
                    </svg>
                </div>
                <div class="priceBlockContent">
                    <div class="priceText"><?= $price->service; ?></div>
                    <div class="priceAmount"><?= $price->price; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="contact">
    <div class="wrap contact__wrap">
        <p class="contact__title">Наши контакты</p>
        <div class="devider contact__devider">
            <p></p>
        </div>
        <div class="contact__block jq_hidden">
            <div class="contact__left">
                <div class="contact__info">
                    <p>Наш адрес</p>
                    <?php foreach ($addresses as $address): ; ?>
                        <p><?= $address->value; ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="contact__info">
                    <p>Круглосуточно</p>
                    <p>
                    <?php foreach ($phones as $phone): ; ?>
                        <a href="tel:<?= str_replace(['+', ' ', '(', ')', '-'], '', $phone->value); ?>"><?= $phone->value; ?></a><br>
                    <?php endforeach; ?>
                    </p>
                </div>
                <div class="contact__info">
                    <p>EMAIL</p>
                    <?php foreach ($emails as $email): ; ?>
                    <p><a href="mailto:<?= $email->value; ?>"><?= $email->value; ?></a></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="map" class="contact__right">
            </div>
        </div>
    </div>
</div>


