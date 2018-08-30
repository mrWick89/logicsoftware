<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package logicsoftware
 */

get_header();
?>

	<div class="banner">
		<!-- This can be taken from the admin panel (page title, description) -->
		<h1 class="banner__title"><?php esc_html_e( 'EL-Панели и Лампы Т8', 'logicsoftware' ); ?></h1>
		<span class="banner__desc"><?php esc_html_e( 'с доставкой по всему миру', 'logicsoftware' ); ?></span>
	</div>


	<!-- This all can be done as widgets -->
	<div class="service">
		<div class="row">
			<div class="col-lg-4 widget">
				<ul class="widget__list">
					<li class="widget__item">
						<a href="#" class="widget__link _main">ЕL-Панели</a>
						<span>
							Она же светопленка, светопанель, светобумага.
Пластичный, тонкий и легкий материал, покрытый люминофором. Отличное решение для привлечения внимания к рекламе своей продукции. Потребляет мизерное количество энергии, устойчива к влаге и вибрации, без ультрафиолетового излучения. Из неё можно вырезать любые фигуры.
						</span>
					</li>

				</ul>
				<h2 class="widget__title">
					Светодиодная продукция
				</h2>
				<ul class="widget__list">
					<li class="widget__item">
						<a href="#" class="widget__link">Лампы Т8</a>
						<span>
							Экономят до 65% электроэнергии. Долговечнее и экологичнее, чем люминесцентные.
						</span>
					</li>
					<li class="widget__item">
						<a href="#" class="widget__link">Светодиодные линейки</a>
						<span>
							Простой способ подсветки прилавков, витрин, рекламных вывесок, и освещения помещений.
						</span>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 widget">
				<h2 class="widget__title">
					Полноцветная печать и постпечатная обработка
				</h2>
				<ul class="widget__list">
					<li class="widget__item">
						<a href="#" class="widget__link">Печать на плоских материалах</a>
					</li>
					<li class="widget__item">
						<a href="#" class="widget__link">Печать на рулонных материалах</a>
						<span>
							На плёнке, бэклите, баннерной ткани, сетке. Печатаем на японских принтерах компании Seiko.
						</span>
					</li>
					<li class="widget__item">
						<a href="#" class="widget__link">Фрезерная резка</a>
						<span>
							Не оставляет обгорелую кромку, в отличие от лазерной резки. Для твердых рекламных материалов до 10 мм.
						</span>
					</li>
					<li class="widget__item">
						<a href="#" class="widget__link">Ламинация пленкой</a>
						<span>
							Дополнительная защита печатной продукции от внешних воздействий.
						</span>
					</li>
					<li class="widget__item">
						<a href="#" class="widget__link">Плоттерная резка</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 widget">
				<h2 class="widget__title">
					Монтаж рекламных материалов
				</h2>
				<ul class="widget__list">
					<li class="widget__item">
						<a href="#" class="widget__link">Монтаж плёнки</a>
					</li>
					<li class="widget__item">
						<a href="#" class="widget__link">Монтаж баннеров</a>
					</li>
					<li class="widget__item">
						<a href="#" class="widget__link">Оклейка автомобилей</a>
					</li>
					<li class="widget__item">
						<a href="#" class="widget__link">Монтаж баннеров на автомобили</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- This can be taken from the admin panel (comments) -->
	<div class="reviews">
		<h2 class="section-title">За нас говорят клиенты</h2>
		<div class="row">
			<div class="col-lg-6">
				<div class="review">
					<div class="review__text">
						<i>«Заказывали печать материалов для ребрендинга. Такого превосходного обслуживания я ещё нигде не встречал. Все материалы были напечатаны вовремя и в отличном качестве.»</i>
					</div>
					<div class="review__author">
						Иван Иванов, менеджер компании «Apple»
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="review">
					<div class="review__text">
						<i>«Заказывали печать материалов для ребрендинга. Такого превосходного обслуживания я ещё нигде не встречал. Все материалы были напечатаны вовремя и в отличном качестве.»</i>
					</div>
					<div class="review__author">
						Пётр Петров, менеджер компании «HP»
					</div>
				</div>
			</div>
		</div>
	</div>

<?php

get_footer();
