<?php
/**
 * The template for displaying the footer
 */
?>
<footer>
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12">
            <div class="row">
                <div class="col-xs-12 footerMenu mobile_footer">
                    <a href="<?php echo get_page_link('136') ?>">О проекте</a>
                    <a href="<?php echo get_page_link('138') ?>">Условия обслуживания</a>
                    <a href="<?php echo get_page_link('140') ?>">Карта сайта</a>
                    <a href="<?php echo get_page_link('142') ?>">Команда</a>
                    <a href="<?php echo get_page_link('144') ?>">Конфиденциальность</a>
                    <a href="<?php echo get_page_link('146') ?>">Контакты</a>
                    <a href="<?php echo get_page_link('148') ?>">Реклама</a>
                </div>
                <div class="footerOtherInfo">
                    <div class="footer-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/footerLogo.png" alt="">
                    </div>
                    <span class="copyright">© 2018 THE WORLD magazine</span>
                    <div class="footerSocLink">
                        <a href="<?php echo get_field('link_facebook', '2') ?>" target="_blank">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_vk', '2')?>" target="_blank">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_twitter', '2') ?>" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_instagram', '2')?>" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_telegram', '2')?>" target="_blank">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo get_field('link_youtube','2') ?>" target="_blank">
                            <i class="fa fa-youtube" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="footerMenu">
                    <a href="<?php echo get_page_link('136') ?>">О проекте</a>
                    <a href="<?php echo get_page_link('138') ?>">Условия обслуживания</a>
                    <a href="<?php echo get_page_link('140') ?>">Карта сайта</a>
                    <a href="<?php echo get_page_link('142') ?>">Команда</a>
                    <a href="<?php echo get_page_link('144') ?>">Конфиденциальность</a>
                    <a href="<?php echo get_page_link('7325') ?>">Пользовательское соглашение</a>
                    <a href="<?php echo get_page_link('146') ?>">Контакты</a>
                    <a href="<?php echo get_page_link('148') ?>">Реклама</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45777603 = new Ya.Metrika({ id: 45777603, clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true });
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function() { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/45777603" style="position: absolute; left: -9999px;" alt=""/>
    </div></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>

</body>
</html>
