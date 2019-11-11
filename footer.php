<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyInvestBLog
 */

?>

	</div><!-- #content -->

	<footer class="grid-12">
            <div class="row footer">
                    <div class="grid-3">
                            <div class="footer-meta">
                                <img src="<?= bloginfo('template_directory'); ?>/img/logo.png" class="footer-logo">
                                <h4>Блог о инвестициях и хайп-проектах
                                        </h4>
                            </div>
                        </div>
                    <div class="grid-3 ml">
                        <ul class="footer-nav">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Блог</a></li>
                            <li><a href="#">Реклама</a></li>
                            <li><a href="#">Заказать рефбек</a></li>
                        </ul>
                    </div>
                    <div class="grid-3 ml">
                            <ul class="footer-nav">
                                <li><a href="#">Видеообзоры</a></li>
                                <li><a href="#">Акции и бонусы</a></li>
                                <li><a href="#">Портфолио</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                    <div class="grid-3 ml">
                        <div class="social-block">
                                <ul>
                                        <li><a href="#"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="footer-updates">
                                            <a href="#" class="btn-regular">Подпишись на обновления</a>

                                    </div>
                        </div>

                    </div>
            </div>

            </footer>  
		
			
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://widget.coinlore.com/widgets/ticker-widget.js"></script>
        <script src="<?= bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
</html>
