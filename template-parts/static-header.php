<!-- The Goal of this file is to insert a non-fixed menu just beneath the cover image. 
Check the content-cover file to see where this is inserted.
The idea here is that this header will be static, stationary on the page. Using some Javascript, a fixed header will be added once the user has scrolled past this header, and removed if the user has scrolled above this static header.
See the additional js file for that code.  

-Hayden
-->

<div class="alignfull no-top-margin">
	<header id="static-site-header" class="header-footer-group">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _ex( 'Search', 'toggle text', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>

					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();
						?>

					</div><!-- .header-titles -->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<img class="nav-hamburger" src="/wp-content/themes/twentytwenty/assets/images/hamburger-icon.png" />
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .header-titles-wrapper -->

				<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} 
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}

					?>

				</div><!-- .header-navigation-wrapper -->
				<div class="social-nav-icons desktop-media-links">
					<?php
						get_template_part( 'template-parts/social-media-links' );
					?>
				</div>

			</div><!-- .header-inner -->
		</header><!-- static-site-header -->
</div><!-- alignfull -->