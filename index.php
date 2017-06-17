<?php
/**
 * Main theme file
 * 
 * @version 0.1.0
 */

include (__DIR__ . DIRECTORY_SEPARATOR . 'functions.php');

get_header('Самая главная');
?>

<section class="section__container">
</section>
<section class="section__container portfolio">
    <div class="row">
        <div class="medium-2">
            <div class="portfolio-item">
                <a href="http://banquet-hall.zp.ua/" target="_blank">
                    <h2 class="portfolio-item__title">Стоечное судно «Павло Полуботок»</h2>
                </a>
            </div>
        </div>
        <div class="medium-2"></div>
        <div class="medium-2"></div>
        <div class="medium-2"></div>
    </div>
</section>
<section class="section__container"></section>
<section class="section__container blog">
    <div class="row">
        <div class="medium-2 large-1 column">
            <a class="blog-item" href="https://tproger.ru/translations/simple-blog-node-js/" style="background-image: url(https://tproger2.azureedge.net/wp-content/uploads/2017/06/blogmini.png);">
                <div class="blog-item__entry">
                    <h3>Создание простого блога на Node.js</h3>
                </div>
            </a>
        </div>
        <div class="medium-2 large-1 column">
            <a class="blog-item" style="background-image: url(https://tproger2.azureedge.net/wp-content/uploads/2017/06/blogmini.png);"></a>
        </div>
        <div class="medium-2 large-1 column">
            <a class="blog-item" style="background-image: url(https://tproger2.azureedge.net/wp-content/uploads/2017/06/blogmini.png);"></a>
        </div>
        <div class="medium-2 large-1 column">
            <a class="blog-item" style="background-image: url(https://tproger2.azureedge.net/wp-content/uploads/2017/06/blogmini.png);"></a>
        </div>
    </div>
</section>
<section class="section__container footer">
    <div class="row">
        <div class="medium-2 column">
            <ul>
                <li><a href="#">Lorem ipsum dolor.</a></li>
                <li><a href="#">Blanditiis, velit amet?</a></li>
                <li><a href="#">Illo, a eaque.</a></li>
                <li><a href="#">Magnam, aliquid, qui.</a></li>
                <li><a href="#">Autem doloribus, dolorem?</a></li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer();