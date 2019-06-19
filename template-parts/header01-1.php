<?php if ( ( has_nav_menu( 'top-right' ) ) && Kirki::get_option( 'infinity', 'top_layout_enable' ) == 1 ) { ?>
  <div class="site-top ">
  <div class="container">
    <div class="row middle">
          <?php if( has_nav_menu('top-social') ) { ?>
                <div class="<?php echo esc_attr($class); ?>">
                  <?php wp_nav_menu( array(
                        'theme_location'  => 'top-social',
                        'menu_id'         => 'top-social',
                        'container_class' => 'top-social-menu',
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
   			   <img src="http://localhost:8888/gerard/wp-content/uploads/2017/10/gerard.png" class="desktop" />
   			     <img src="http://localhost:8888/gerard/wp-content/uploads/2017/10/gerard.png" class="mobile" />
 		   </div>
      </div>

      <div class="col-xs-2 hidden-lg end"> <i id="open-<?php echo is_rtl() ? 'right' : 'left'; ?>" class="fa fa-navicon"></i> </div>
      <div class="col-xs-12 col-lg-10 center-xs center-sm center-md">
        <div class="header-right">
          <div class="row middle">
            <div class="site-top">
              <div class="container">
                <div class="row middle">

                  <?php
                    $class = 'col-sm-12 col-md-12';
                    if ( class_exists( 'SitePress' ) || class_exists( 'Polylang' ) ) {
                      $class = 'col-sm-6';
                      ?>
                  <div class="col-sm-3">
                    <?php dynamic_sidebar( 'lang-area' ); ?>
                  </div>
                  <?php } ?>

                  <!--Top Right -->



                </div>





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

            <?php if ( Kirki::get_option( 'infinity', 'header_layout_search_enable' ) == 1 || (class_exists( 'WooCommerce' ) && Kirki::get_option( 'infinity', 'header_layout_mini_cart_enable' ) == 1) ) { ?>
            <?php $class = 'col-lg-10'; $class2 = 'col-lg-2'; ?>
            <?php } else { ?>
            <?php $class = 'col-lg-12'; ?>
            <?php } ?>
            <div class="col-xs-12 col-sm-9 <?php echo esc_attr( $class ); ?> start-xs start-sm">
              <?php dynamic_sidebar( 'header-right' ); ?>
            </div>
            <nav id="subsite-navigation" class="home-navigation hidden-xs hidden-sm hidden-md">
              <div class="container">
                <div class="row middle">


                </div>
                <div class="row middle">
                  <div class="col-lg-12" style="text-align: right;">
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
  <?php if ( has_nav_menu( 'social' ) )  { ?>
  <?php wp_nav_menu( array(
			'theme_location'  => 'social',
			'menu_id'         => 'social-menu-top',
			'container_class' => 'social-menu hidden-xs hidden-sm hidden-md',
			'fallback_cb'     => false
		) ); ?>
  <?php } ?>
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
