<?php

use yii\helpers\Url;

//use yii\widgets\Menu;
//use common\widgets\MultiLang\MultiLang;

/* @var $menuItems array */
/* @var $phones \common\entities\Contacts[] */
/* @var $emails \common\entities\Contacts[] */
?>


<header>
    <div class="top wrap">
        <div class="top__logo logo">
            <a id="logo" href="<?= Url::to(['site/index']); ?>">
                <!-- ?xml version="1.0" encoding="utf-8"? -->
                <!-- Generator: Adobe Illustrator 23.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px"
                     viewBox="0 0 450 160" style="enable-background:new 0 0 450 160;" xml:space="preserve">
<polygon points="121,160 39,160 39,121 0,121 0,39 39,39 39,0 121,0 121,39 158,39 158,43 117,43 117,4 43,4 43,43 4,43 4,117
  43,117 43,156 117,156 117,117 158,117 158,121 121,121 " fill="#ff0000"/>
                    <path id="check" style="fill:none;stroke:#FF0000;stroke-width:4;stroke-miterlimit:10;"
                          stroke-dasharray="1895" stroke-dashoffset="0" d="M58,55.6h22.9c5.5,0,10.3,1,14.5,3.1s7.5,5,9.8,8.8s3.5,8.2,3.5,13.2s-1.2,9.5-3.5,13.2c-2.3,3.8-5.6,6.7-9.8,8.8
  c-4.2,2.1-9,3.1-14.5,3.1H58V55.6z M80.3,96.4c5,0,9.1-1.4,12.1-4.2c3-2.8,4.5-6.6,4.5-11.4s-1.5-8.6-4.5-11.4s-7-4.2-12.1-4.2H69.7
  v31.2C69.7,96.4,80.3,96.4,80.3,96.4z M127.8,103.5c-4.2-2.3-7.5-5.4-9.9-9.3c-2.4-4-3.6-8.4-3.6-13.4c0-4.9,1.2-9.4,3.6-13.4
  c2.4-4,5.7-7.1,9.9-9.3c4.2-2.3,8.9-3.4,14.1-3.4c5.2,0,9.9,1.1,14.1,3.4c4.2,2.3,7.5,5.4,9.9,9.3c2.4,4,3.6,8.4,3.6,13.4
  c0,4.9-1.2,9.4-3.6,13.4c-2.4,4-5.7,7.1-9.9,9.3c-4.2,2.3-8.9,3.4-14.1,3.4S132,105.7,127.8,103.5z M150,94.9
  c2.4-1.4,4.3-3.3,5.7-5.7c1.4-2.4,2.1-5.2,2.1-8.4c0-3.1-0.7-5.9-2.1-8.4c-1.4-2.4-3.3-4.4-5.7-5.7c-2.4-1.4-5.1-2.1-8.1-2.1
  s-5.7,0.7-8.1,2.1c-2.4,1.4-4.3,3.3-5.7,5.7c-1.4,2.4-2.1,5.2-2.1,8.4c0,3.1,0.7,5.9,2.1,8.4c1.4,2.4,3.3,4.4,5.7,5.7
  c2.4,1.4,5.1,2.1,8.1,2.1C144.9,96.9,147.6,96.2,150,94.9z M222,84.4c1.6,2.1,2.4,4.8,2.4,7.9c0,4.4-1.7,7.8-5.1,10.2
  c-3.4,2.4-8.4,3.6-15,3.6h-26.1V55.6h24.6c6.1,0,10.9,1.2,14.1,3.5c3.3,2.4,4.9,5.5,4.9,9.6c0,2.4-0.6,4.6-1.8,6.6
  c-1.2,1.9-2.8,3.4-4.9,4.5C218.2,80.7,220.4,82.2,222,84.4z M189.9,64.4v11.9h11.6c2.9,0,5.1-0.5,6.6-1.5s2.2-2.5,2.2-4.5
  s-0.7-3.4-2.2-4.4s-3.7-1.5-6.6-1.5H189.9z M210.4,95.7c1.6-1,2.3-2.6,2.3-4.7c0-4.2-3.1-6.3-9.3-6.3h-13.6v12.5h13.6
  C206.5,97.2,208.9,96.7,210.4,95.7z M265.5,106l-9.7-14h-0.6H245v14h-11.7V55.6h21.8c4.5,0,8.3,0.7,11.6,2.2
  c3.3,1.5,5.8,3.6,7.6,6.3c1.8,2.7,2.7,6,2.7,9.7s-0.9,7-2.7,9.7c-1.8,2.7-4.4,4.8-7.7,6.2l11.3,16.2h-12.4V106z M262.5,67.4
  c-1.8-1.5-4.5-2.3-8-2.3H245v17.6h9.5c3.5,0,6.2-0.8,8-2.3s2.7-3.7,2.7-6.5C265.2,71.1,264.3,68.9,262.5,67.4z M296.5,103.5
  c-4.2-2.3-7.5-5.4-9.9-9.3c-2.4-4-3.6-8.4-3.6-13.4c0-4.9,1.2-9.4,3.6-13.4s5.7-7.1,9.9-9.3c4.2-2.3,8.9-3.4,14.1-3.4
  s9.9,1.1,14.1,3.4c4.2,2.3,7.5,5.4,9.9,9.3c2.4,4,3.6,8.4,3.6,13.4c0,4.9-1.2,9.4-3.6,13.4s-5.7,7.1-9.9,9.3s-8.9,3.4-14.1,3.4
  S300.7,105.7,296.5,103.5z M318.7,94.9c2.4-1.4,4.3-3.3,5.7-5.7c1.4-2.4,2.1-5.2,2.1-8.4c0-3.1-0.7-5.9-2.1-8.4
  c-1.4-2.4-3.3-4.4-5.7-5.7c-2.4-1.4-5.1-2.1-8.1-2.1s-5.7,0.7-8.1,2.1s-4.3,3.3-5.7,5.7c-1.4,2.4-2.1,5.2-2.1,8.4
  c0,3.1,0.7,5.9,2.1,8.4c1.4,2.4,3.3,4.4,5.7,5.7c2.4,1.4,5.1,2.1,8.1,2.1C313.6,96.9,316.3,96.2,318.7,94.9z M374.7,103.8
  c-3.3-2.1-5.8-5.1-7.7-9c-1.8-3.9-2.8-8.6-2.8-14s0.9-10.1,2.8-14c1.8-3.9,4.4-6.9,7.7-9c3.3-2.1,7-3.1,11.2-3.1s7.9,1,11.2,3.1
  c3.3,2.1,5.8,5.1,7.7,9c1.8,3.9,2.8,8.6,2.8,14s-0.9,10.1-2.8,14c-1.8,3.9-4.4,6.9-7.7,9c-3.3,2.1-7,3.1-11.2,3.1
  S377.9,105.8,374.7,103.8z M393.1,93c1.8-2.6,2.6-6.7,2.6-12.2s-0.9-9.6-2.6-12.2c-1.8-2.6-4.2-4-7.2-4s-5.4,1.3-7.2,4
  c-1.8,2.6-2.6,6.7-2.6,12.2s0.9,9.6,2.6,12.2c1.8,2.6,4.1,4,7.2,4C388.9,97,391.3,95.7,393.1,93z M446.1,81.1
  c2.4,2.6,3.5,5.7,3.5,9.5c0,2.9-0.8,5.6-2.3,8.1s-3.9,4.5-7,5.9c-3.1,1.5-7,2.2-11.6,2.2c-3.6,0-7-0.5-10.5-1.4
  c-3.4-0.9-6.3-2.3-8.7-4l4.5-8.9c1.9,1.4,4.1,2.6,6.7,3.3c2.5,0.8,5.1,1.2,7.7,1.2c2.9,0,5.2-0.6,6.9-1.7c1.7-1.1,2.5-2.7,2.5-4.8
  c0-4.1-3.1-6.2-9.4-6.2h-5.3v-7.7L433.5,65H412v-9.4h35.3v7.6l-11.4,13C440.4,76.8,443.7,78.5,446.1,81.1z">
                        <animate id="p1" attributeName="stroke-dashoffset" begin="0s" values="1895; 1500" dur="5s"
                                 repeatCount="indefinite"
                                 fill="freeze" calcMode="linear"></animate>
                    </path>
        </svg>
            </a>
        </div>
        <div class="top__location">
            <svg class="top__location--svg">
                <use xlink:href="/files/img/symbol/sprite.svg#placeholder-filled-point"/>
            </svg>
            <p class="top__location--title lightRed">Круглосуточно</p>
            <p>Работаем в Москве и области</p>
            <p>Выезжаем в регионы</p>
        </div>
        <div class="top__phone">
            <?php foreach ($phones as $phone): ; ?>
                <a href="tel:<?= str_replace(['+', ' ', '(', ')', '-'], '', $phone->value); ?>"><?= $phone->value; ?></a>
            <?php endforeach; ?>
            <?php foreach ($emails as $email): ; ?>
                <a class="top__phone--mail" href="mailto:<?= $email->value; ?>"><?= $email->value; ?></a>
            <?php endforeach; ?>
        </div>
        <a href="<?= Url::to(['site/consultation']); ?>" id="consultationForm" class="ajaxLink">
        <div class="top__callback" id="openConsult">
            <div class="pulseBtn"></div>
            <span id="consultation">
                <svg class="top__callback--svg">
                    <use xlink:href="/files/img/symbol/sprite.svg#plus-black-symbol"/>
                </svg>
                Заказать консультацию
            </span>
        </div>
        </a>
    </div>
</header>
