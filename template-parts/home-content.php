<?php
/**
 * Displays the Home page.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php
	// On the cover page template, output the cover header.
	$cover_header_style   = '';
	$cover_header_classes = '';

	$image_url = ! post_password_required() ? get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' ) : '';

	if ( $image_url ) {
		$cover_header_style   = ' style="background-image: url( ' . esc_url( $image_url ) . ' ); max-height: 70vh;"';
		$cover_header_classes = 'bg-image';
	}

	// Get the fixed background attachment option.
	if ( get_theme_mod( 'cover_template_fixed_background', true ) ) {
		$cover_header_classes .= ' bg-attachment-fixed';
	}

	?>

	<div id="cover-header-1" class="cover-header <?php echo $cover_header_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"<?php echo $cover_header_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>>
		<div class="cover-header-inner-wrapper screen-height">
			<div class="cover-header-inner">
				<div class="cover-color-overlay color-accent opacity-60"></div>

					<header class="cover-header-text entry-header has-text-align-center">
						<div class="entry-header-inner section-inner medium">

							<figure class="wp-block-image size-medium fade-inout-up">
							<img decoding="async" width="300" height="214" src="<?php echo get_theme_mod('home_site_logo'); ?>" alt="" class="wp-image-64" srcset="<?php echo get_theme_mod('home_site_logo'); ?> 300w, <?php echo get_theme_mod('home_site_logo'); ?> 768w, <?php echo get_theme_mod('home_site_logo'); ?> 800w" sizes="(max-width: 300px) 100vw, 300px"></figure>
							<h3 class="fade-inout-up"><?php echo get_theme_mod('home_entry_text'); ?></h3>

						</div><!-- .entry-header-inner -->
					</header><!-- .entry-header -->

			</div><!-- .cover-header-inner -->
		</div><!-- .cover-header-inner-wrapper -->
	</div><!-- .cover-header -->
	<div id="home-page-red-bar" class="red-bar-area">
		<div class="flex-area fader-in">
			<div><b>Professional medical clinic care available to the whole community:</b></div>

			<?php

			$appointment_url = get_theme_mod('book_appointment_destination');
			if ($appointment_url == '')
			{
				$appointment_url = "#";
			}

			?>

			<a class="umc-button" target="_blank" href="<?php echo $appointment_url; ?>"><b>
				Book An Appointment &rarr;</b>
			</a>
		</div>
	</div>
	
	<div class="post-inner" id="post-inner">

		<div class="entry-content">

		<?php
		the_content();
		?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

</article><!-- .post -->