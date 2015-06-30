<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Lola
 */
?>
	</div><!-- #content -->
</div><!-- #page -->
<div class="footer-bg">
	<div class="footer-widgets">
        <div id="footer-sidebar1">
            <?php
            if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
            }
            ?>
        </div>
        <div id="footer-sidebar2">
            <?php
            if(is_active_sidebar('footer-sidebar-2')){
            dynamic_sidebar('footer-sidebar-2');
            }
            ?>
        </div>
        <div id="footer-sidebar3">
            <?php
            if(is_active_sidebar('footer-sidebar-3')){
            dynamic_sidebar('footer-sidebar-3');
            }
            ?>
        </div>
        <div id="footer-sidebar4">
            <?php
            if(is_active_sidebar('footer-sidebar-4')){
                dynamic_sidebar('footer-sidebar-4');
            }
            ?>
</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lola' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'lola' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>			
                        <a href="<?php echo esc_url( __( 'http://99theme.com/', 'lola' ) ); ?>"><?php printf( __( 'Lola By %s', 'lola' ), '99Theme' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
        </div>
</div>
<?php wp_footer(); ?>
</body>
</html>