<?php if ( ( has_nav_menu( 'top-left' ) || has_nav_menu( 'top-right' ) ) && Kirki::get_option( 'infinity', 'top_layout_enable' ) == 1 ) { ?>

<div class="site-top">
  <div class="container">
    <div class="row middle">
      <?php if( has_nav_menu('top-left') ) { ?>
      <div class="<?php echo esc_attr($class); ?>">
        <?php wp_nav_menu( array(
							'theme_location'  => 'top-left',
							'menu_id'         => 'top-left-menu',
							'container_class' => 'top-left-menu',
							'fallback_cb'     => false
						) ); ?>
      </div>
      <?php } ?>
      <?php
				$class = 'col-sm-8 col-md-8';
				if ( class_exists( 'SitePress' ) || class_exists( 'Polylang' ) ) {
					$class = 'col-sm-12';
					?>
      <div class="col-sm-3">
        <?php dynamic_sidebar( 'lang-area' ); ?>
      </div>
      <?php } ?>

      <!--Top Right -->

<?php if( has_nav_menu('top-right') ) { ?>
      <div class="<?php echo esc_attr($class); ?>">
        <?php wp_nav_menu( array(
							'theme_location'  => 'top-right',
							'menu_id'         => 'top-right-menu',
							'container_class' => 'top-right-menu',
							'fallback_cb'     => false
						) ); ?>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
<header class="site-header">
  <div class="container">
    <div class="row middle-xs middle-sm middle-md">
      <div class="col-xs-10 col-lg-2 site-branding">


        <div class="logo">
          <a href="https://www.gerardafrica.com/"><img src="https://www.decraafrica.com/wp-content/uploads/2018/09/decra.gif" class="desktop" /></a>
          <a href="https://www.gerardafrica.com/"><img src="https://www.decraafrica.com/wp-content/uploads/2018/09/decra.gif" class="mobile" /></a>
		    </div>
      </div>
      <div class="col-xs-10 col-lg-10 center-xs center-sm center-md">
        <div class="header-right">
          <div class="row middle">
			      <div class="site-top"  style="background-color: #fff; color: #000;">
              <div class="container">



            <nav id="subsite-navigation" class="home-navigation hidden-xs hidden-sm hidden-md">
                <div class="container">
                  <div class="row middle" >
                    <div class="col-lg-12" style="text-align: right; z-index:9999; padding:0 0 20px 0;">
                      <?php wp_nav_menu( array(
                                              'theme_location'  => 'top-social',
                                              'menu_id'         => 'primary-menu',
                                              'container_class' => 'primary-menu',
                                              'walker'          => new TM_Walker_Nav_Menu
                          ) ); ?>

                    </div>
                  </div>
                </div>
              </nav>



            <nav id="subsite-navigation" class="home-navigation hidden-xs hidden-sm hidden-md">
              <div class="container">
                <div class="row middle">
                  <div class="col-lg-9" style="margin-left:230px; margin-right:0px;right:0px; padding-right:0px; text-align: right;">
                    <?php wp_nav_menu( array(
                                            'theme_location'  => 'home',
                                            'menu_id'         => 'primary-menu',
                                            'container_class' => 'primary-menu',
                                            'walker'          => new TM_Walker_Nav_Menu
                                        ) ); ?>
                  </div>

                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>

<!-- #masthead -->
<nav id="site-navigation" class="main-navigation hidden-xs hidden-sm hidden-md">
  <div class="container">
    <div class="row middle">
      <div class="col-lg-12 center">
        <?php if ( class_exists( 'TM_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu_id'         => 'primary-menu',
						'container_class' => 'primary-menu',
						'walker'          => new TM_Walker_Nav_Menu
					) );
				} else {
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu_id'         => 'primary-menu',
						'container_class' => 'primary-menu'
					) );
				} ?>
      </div>

    </div>
  </div>
</nav>
<!-- #site-navigation -->
