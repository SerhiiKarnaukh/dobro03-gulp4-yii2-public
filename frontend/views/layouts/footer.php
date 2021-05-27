<?php

/* @var $socials \common\entities\Socials[] */
?>

<footer class="footer">
    <div class="wrap footer__wrap">
        <div class="footer__left">
            <ul class="footer__socials socials">
                <?php foreach ($socials as $social): ; ?>
                    <li>
                        <a href = "<?= $social->link ?>" class="soc" ><span class="icon-<?= $social->icon; ?>" ></span > </a >
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="footer__right">
            <p>Sergeus &copy; All Rights Reserved </p>
        </div>
    </div>
</footer>

<div class="arrow-up">
    <a href="#top">
        <svg class="arrow-up__img">
            <use xlink:href="/files/img/symbol/sprite.svg#arrow-up"/>
        </svg>
    </a>
</div>


