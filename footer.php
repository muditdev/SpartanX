<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer class="main-footer" role="contentinfo">
		<div class="container footer">
			<div class="footer-content">
				<div class="footer--logo">
					<a href="javascript:void(0)">
						<img src="<?php echo get_template_directory_uri() ?>/images/Spartan_white.png" alt="">
					</a>
				</div>
				<div class="footer--copy">
					<span>Spartan 2018</span>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
