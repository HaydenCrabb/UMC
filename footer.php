<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<div class="appointment-section">
				<div class="appointment-items flex-area standard-left-fade">
					<div>Ready to Receive Immediate Care?</div>
					<a class="umc-button" target="_blank" href="<?php echo get_theme_mod('book_appointment_destination'); ?>">
						Book An Appointment &rarr;
					</a>
				</div>
			</div>
			<footer id="site-footer" class="header-footer-group">

				<div class="section-inner">

					<div class="wp-block-columns">
						<div id="footer-logo-column" class="wp-block-column">
							<a href="/"><figure class="wp-block-image size-medium">
							<img decoding="async" width="300" height="214" src="<?php echo get_theme_mod('footer_site_logo'); ?>" alt="" class="wp-image-64" srcset="<?php echo get_theme_mod('footer_site_logo'); ?> 300w, <?php echo get_theme_mod('footer_site_logo'); ?> 768w, <?php echo get_theme_mod('footer_site_logo'); ?> 800w" sizes="(max-width: 300px) 100vw, 300px"></figure></a>
						</div>
						<div class="wp-block-column flex-area">
							<div class="menu">
								<ul>
									<?php
			                                        
			                            wp_nav_menu( array(
			                                'theme_location'  => 'footer',
			                                'container' => false,
			                                'items_wrap' => '%3$s',
			                            ) );
			                        ?>
			                    </ul>
		                    </div>
	                    	<div class="menu">
	                    		<ul>
	                    			<li class="page_item"><a target="_blank" href="<?php echo get_theme_mod('book_appointment_destination'); ?>">Book An Appointment</a></li>
	                    			<li class="page_item"><a target="_blank" href="<?php echo get_theme_mod('pay_bill_destination'); ?>">Pay Bill</a></li>
	                    			<li class="page_item"><a target="_blank" href="<?php echo get_theme_mod('patient_portal_destination'); ?>">Patient Portal</a></li>
	                    		</ul>
	                    	</div>
	                    </div>
					</div>

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->
			<div id="footer-red-bar-area" class="red-bar-area">
				<p>823 E. Amity Ave Nampa, ID 83686 &nbsp;|&nbsp; Phone: 208-467-8428 &nbsp;|&nbsp; Fax: 800-934-4028 &nbsp;|&nbsp; Email: healthservices@nnu.edu &nbsp;|&nbsp; Billing Office Phone: 208-908-7220</p>
			</div>

			<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>
			<script src='https://code.jquery.com/jquery-3.7.0.min.js' integrity='sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=' crossorigin='anonymous'></script>
			<script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js" integrity="sha256-UnTxHm+zKuDPLfufgEMnKGXDl6fEIjtM+n1Q6lL73ok=" crossorigin="anonymous"></script>
			<script src="<?php echo get_template_directory_uri()?>/assets/js/swipe.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
			
			
			<script src="<?php echo get_template_directory_uri()?>/assets/js/additional.js?v=<?php echo time(); ?>"></script>

		<?php wp_footer(); ?>

	</body>
</html>
