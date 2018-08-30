<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package logicsoftware
 */

?>
		<!-- This all can be taken from the admin panel (add page settings) -->
		<footer class="footer">
			<div class="row">
				<div class="col-lg-3 footer__info">
					 <?php _e( '©, ООО "Delivery", 2010 — 2017 <br> Эл. почта:', 'logicsoftware' ); ?>
					 <a href="mailto:hello@gmail.com" class="footer__link">hello@gmail.com</a>
				</div>
				<div class="col-lg-6 footer__info">
					<?php _e( 'Адрес: Минск, площадь<br> Независимости, 143, оф. 6', 'logicsoftware' ); ?>
				</div>
				<div class="col-lg-3 footer__info _text-right">
					<span><?php esc_html_e( 'Есть вопросы?', 'logicsoftware' ); ?></span><br>
					<a href="#" class="footer__link"><?php esc_html_e( 'Напишите нам', 'logicsoftware' ); ?></a>
				</div>
			</div>
		</footer>

	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">
				  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="15" viewBox="0 0 16 15">
					<image id="close" width="16" height="15" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAPCAQAAABHeoekAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfiCB4DBgk6Lto/AAAAg0lEQVQY03XPuxHCMBAA0V1SSyk9EBFRCh+bmkgwEFAAIb8e6IuAMR5ZkjLNvpm7g7kHpPSiV2YAa48FEn2zHD45STLAJiFZTkn0lecf6ZFQywBbLz7rGaIfb5Wj/6vtPJfJOLtIQjK7nZLgY7Ja62kkeQboBtJ4rxy2t0doWFTPXuEXSHAZYE1bfCUAAAAASUVORK5CYII="/>
				  </svg>
			  </span>
			</button>
			<h5 class="modal__title"><?php esc_html_e( 'Обратный звонок', 'logicsoftware' ); ?></h5>
			<form id="signupForm" method="post" action="">
				<div class="form-group">
					<input type="text" class="form-control" id="username" name="username" placeholder="<?php esc_html_e( 'Имя', 'logicsoftware' ); ?>">
				</div>
				<div class="form-group">
					<input type="phone" class="form-control" id="phone" name="phone" placeholder="<?php esc_html_e( 'Телефон', 'logicsoftware' ); ?>">
				</div>
				<input type="submit" class="btn modal__btn" name="signup" value="<?php esc_html_e( 'Заказать', 'logicsoftware' ); ?>">

			</form>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
