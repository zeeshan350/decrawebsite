<?php
/**
 * Default value for all settings in customizer
 */
define( 'PRIMARY_COLOR', '#FBD232' );
define( 'SECONDARY_COLOR', '#111111' );
define( 'PRIMARY_COLOR_ALPHA', 'rgba(251,210,50,1)' );
define( 'SECONDARY_COLOR_ALPHA', 'rgba(17,17,17,1)' );

/**
 * Site
 */
define('SITE_GENERAL_BREADCRUMB_ENABLE', 0);
define('SITE_GENERAL_BREADCRUMB_HOME_TEXT', 'Home');
define('SITE_GENERAL_BREADCRUMB_YOU_ARE_HERE_TEXT', 'You are here:');
define('SITE_GENERAL_BOXED', 0);
define('SITE_GENERAL_BACK_TO_TOP', 1);
define( 'SITE_GENERAL_RTL', 1 );

define('SITE_LAYOUT', 'content-sidebar');
define('ARCHIVE_LAYOUT', 'content-sidebar');
define('SEARCH_LAYOUT', 'sidebar-content');

define('SITE_LOGO', 'http://renovation.thememove.com/data/images/logo.png');
define('SITE_LOGO_PADDING', '47px 20px 47px 15px');

define('SITE_FAVICON', 'http://renovation.thememove.com/data/images/favicon.ico');
define('SITE_APPLE_TOUCH_ICON', 'http://renovation.thememove.com/data/images/apple_touch_icon.png');

define('SITE_COLOR_BREAD_CRUMB_LINK', '#999');
define('SITE_COLOR_BREAD_CRUMB_LINK_HOVER', PRIMARY_COLOR);

define('SITE_STYLE_BODY_FONT_FAMILY', 'Lato');
define('SITE_STYLE_BODY_FONT_WEIGHT', 400);
define('SITE_STYLE_BODY_FONT_SIZE', 15);
define('SITE_STYLE_BODY_TEXT', '#777');

define('SITE_STYLE_HEADING_FONT_FAMILY', 'Montserrat');
define('SITE_STYLE_HEADING_FONT_WEIGHT', 700);
define('SITE_STYLE_HEADING_LETTER_SPACING', 0);
define('SITE_STYLE_HEADING_FONT_COLOR', '#1d2634');

define('SITE_STYLE_HEADING_H1_FONT_SIZE', 28);
define('SITE_STYLE_HEADING_H2_FONT_SIZE', 24);
define('SITE_STYLE_HEADING_H3_FONT_SIZE', 18);
define('SITE_STYLE_HEADING_H4_FONT_SIZE', 16);

define('SITE_BG_COLOR', '#eee');

/**
 * Top
 */
define('TOP_LAYOUT_ENABLE', 1);
define('TOP_BG_COLOR', '#222');
define('TOP_STYLE_LINK_FONT_FAMILY', SITE_STYLE_BODY_FONT_FAMILY);
define('TOP_STYLE_LINK_FONT_SIZE', 14);
define('TOP_STYLE_LINK_FONT_WEIGHT', 400);
define('TOP_STYLE_LINK_FONT_COLOR', 'rgba(255,255,255,.6)');
define('TOP_STYLE_LINK_FONT_COLOR_HOVER', 'rgba(255,255,255,1)');
define('TOP_GENERAL_PADDING', '0px 0px 0px 0px');
define('TOP_GENERAL_MARGIN', '0px 0px 0px 0px');
define('TOP_BORDER_WIDTH', '0px 0px 0px 0px');
define('TOP_BORDER_STYLE', 'solid');
define('TOP_BORDER_COLOR', TOP_BG_COLOR);

/**
 * Header
 */
define('HEADER_TYPE', 'header01');
define('HEADER_LAYOUT_SEARCH_ENABLE', 1);
define('HEADER_LAYOUT_MINI_CART_ENABLE', 1);

define('HEADER_STYLE_FONT_FAMILY', SITE_STYLE_BODY_FONT_FAMILY);
define('HEADER_STYLE_FONT_SIZE', SITE_STYLE_BODY_FONT_SIZE);
define('HEADER_STYLE_FONT_WEIGHT', SITE_STYLE_BODY_FONT_WEIGHT);
define('HEADER_STYLE_FONT_COLOR', '#fff');

define('HEADER_STYLE_SEARCH_TEXT_COLOR', PRIMARY_COLOR);
define('HEADER_STYLE_MINICART_ICON_COLOR', PRIMARY_COLOR);
define('HEADER_STYLE_MINICART_TEXT_COLOR', SECONDARY_COLOR);
define('HEADER_STYLE_MINICART_NUMBER_COLOR', '#fff');

define('HEADER_SPACING_PADDING', '0px 0px 0px 0px');
define('HEADER_SPACING_MARGIN', '0px 0px 0px 0px');

define('HEADER_BORDER_WIDTH', '0px 0px 0px 0px');
define('HEADER_BORDER_STYLE', 'solid');
define('HEADER_BORDER_COLOR', '#000');

define('HEADER_BG_COLOR', SECONDARY_COLOR);
define('HEADER_BG_MINICART_NUMBER_BG', '#2e2e2e');

/**
 * Navigation
 */
define('NAV_STICKY_ENABLE', 0);

define ('NAV_STYLE_MOBILE_MENU_LINK_COLOR', SECONDARY_COLOR);

define('NAV_TYPO_MENU_FONT_FAMILY', SITE_STYLE_HEADING_FONT_FAMILY);
define('NAV_TYPO_MENU_FONT_WEIGHT', 600);
define('NAV_TYPO_MENU_FONT_SIZE', 14);
define('NAV_STYLE_MENU_TEXT', '#666');
define('NAV_STYLE_MENU_TEXT_HOVER', SECONDARY_COLOR);

define('NAV_TYPO_SUB_MENU_FONT_FAMILY', SITE_STYLE_BODY_FONT_FAMILY);
define('NAV_TYPO_SUB_MENU_FONT_WEIGHT', SITE_STYLE_BODY_FONT_WEIGHT);
define('NAV_TYPO_SUB_MENU_FONT_SIZE', SITE_STYLE_BODY_FONT_SIZE);
define('NAV_STYLE_SUB_MENU_TEXT', '#666');
define('NAV_STYLE_SUB_MENU_TEXT_HOVER', SECONDARY_COLOR);

define('NAV_TYPO_HOMEMENU_FONT_FAMILY', SITE_STYLE_HEADING_FONT_FAMILY);
define('NAV_TYPO_HOMEMENU_FONT_WEIGHT', 600);
define('NAV_TYPO_HOMEMENU_FONT_SIZE', 14);
define('NAV_STYLE_HOMEMENU_TEXT', '#666');
define('NAV_STYLE_HOMEMENU_TEXT_HOVER', SECONDARY_COLOR);



define('NAV_SPACING_MENU_TEXT_PADDING', '27px 20px 23px 20px');
define('NAV_SPACING_SUB_MENU_TEXT_PADDING', '15px 20px 17px 20px');

define('NAV_BORDER_MENU_TEXT_BORDER_WITH', '1px 1px 1px 1px');
define('NAV_BORDER_STYLE', 'solid');
define('NAV_BORDER_MENU_TEXT_BORDER_COLOR', '#999');
define('NAV_BORDER_MENU_TEXT_BORDER_COLOR_HOVER', '#999');

define('NAV_BORDER_SUB_MENU_TEXT_BORDER_WITH', '1px 1px 1px 1px');
define('NAV_BORDER_SUB_MENU_STYLE', 'solid');
define('NAV_STYLE_SUB_MENU_TEXT_BORDER_COLOR', '#999');
define('NAV_STYLE_SUB_MENU_TEXT_BORDER_COLOR_HOVER', '#999');

define('NAV_BG_MENU_BACKGROUND', 'rgba(255,255,255,1)');
define('NAV_BG_MENU_TEXT_BG', 'rgba(255,255,255,1)');
define('NAV_BG_MENU_TEXT_BG_HOVER', '#fff');
define('NAV_BG_SUB_MENU_TEXT_BG', '#fff');
define('NAV_BG_SUB_MENU_TEXT_BG_HOVER', PRIMARY_COLOR);
define('NAV_BG_MOBILE_MENU_BG', '#fff');


define('HOME_BG_MENU_BACKGROUND', 'rgba(255,255,255,1)');
define('HOME_BG_MENU_TEXT_BG', 'rgba(255,255,255,1)');
define('HOME_BG_MENU_TEXT_BG_HOVER', '#fff');


/**
 * Button
 */
define('BUTTON_STYLE_FONT_FAMILY', SITE_STYLE_HEADING_FONT_FAMILY);
define('BUTTON_STYLE_FONT_SIZE', 13);
define('BUTTON_STYLE_FONT_WEIGHT', 700);
define('BUTTON_STYLE_LINK_COLOR', SECONDARY_COLOR);
define('BUTTON_STYLE_LINK_COLOR_HOVER', '#fff');

define('BUTTON_PADDING', '10px 15px 10px 15px');
define('BUTTON_MARGIN', '0px 0px 0px 0px');

define('BUTTON_BORDER_WIDTH', '2px 2px 2px 2px');
define('BUTTON_BORDER_STYLE', 'solid');
define('BUTTON_BORDER_COLOR', PRIMARY_COLOR);
define('BUTTON_BORDER_COLOR_HOVER', SECONDARY_COLOR);

define('BUTTON_BG_COLOR', PRIMARY_COLOR);
define('BUTTON_BG_COLOR_HOVER', SECONDARY_COLOR);

/**
 * Footer
 */
define('FOOTER_STYLE_FONT_FAMILY', SITE_STYLE_BODY_FONT_FAMILY);
define('FOOTER_STYLE_FONT_SIZE', 14);
define('FOOTER_STYLE_FONT_WEIGHT', SITE_STYLE_BODY_FONT_WEIGHT);
define('FOOTER_STYLE_TEXT_COLOR', 'rgba(255,255,255,0.6)');
define('FOOTER_STYLE_LINK_COLOR', 'rgba(255,255,255,0.6)');
define('FOOTER_STYLE_LINK_COLOR_HOVER', 'rgba(254,215,0,1)');
define('FOOTER_STYLE_WIDGET_TITLE_COLOR', '#fff');

define('FOOTER_GENERAL_PADDING', '70px 0px 70px 0px');
define('FOOTER_GENERAL_MARGIN', '0px 0px 0px 0px');

define('FOOTER_BORDER_WIDTH', '0px 0px 0px 0px');
define('FOOTER_BORDER_STYLE', 'solid');
define('FOOTER_BORDER_COLOR', '#000');

define('FOOTER_BG_IMAGE', 'http://renovation.thememove.com/data/images/footer-bg.jpg');
define('FOOTER_BG_COLOR', 'rgba(17,17,17,0.9)');

/**
 * Copyright
 */
define('COPYRIGHT_LAYOUT_ENABLE', 1);
define('COPYRIGHT_LAYOUT_TEXT', 'Made with <i class="fa fa-heart"></i> by <a target="_blank" href="#">ThemeMove.com</a>.');

define('COPYRIGHT_STYLE_TEXT_COLOR', 'rgba(255,255,255,0.6)');
define('COPYRIGHT_STYLE_LINK_COLOR', 'rgba(255,255,255,0.6)');
define('COPYRIGHT_STYLE_LINK_COLOR_HOVER', 'rgba(254,215,0,1)');

define('COPYRIGHT_GENERAL_PADDING', '50px 0px 40px 0px');
define('COPYRIGHT_GENERAL_MARGIN', '0px 0px 0px 0px');

define('COPYRIGHT_BG_COLOR', SECONDARY_COLOR);

/**
 * Page
 */
define('PAGE_LAYOUT', 'full-width');

define('PAGE_STYLE_HEADING_STYLE', 'bg_color');
define('PAGE_STYLE_DISABLE_PARALLAX', 0);
define('PAGE_STYLE_HEADING_FONT_FAMILY', SITE_STYLE_HEADING_FONT_FAMILY);
define('PAGE_STYLE_HEADING_FONT_WEIGHT', SITE_STYLE_HEADING_FONT_WEIGHT);
define('PAGE_STYLE_HEADING_LETTER_SPACING', -0.025);
define('PAGE_STYLE_HEADING_FONT_COLOR', '#fff');
define('PAGE_STYLE_HEADING_FONT_SIZE', 36);

define('PAGE_SPACING_PADDING', '80px 0px 80px 0px');

define('PAGE_HEADING_BG_COLOR', SECONDARY_COLOR);
define('PAGE_OVERLAY_BG_COLOR', 'rgba(17,17,17,0.7)');
define('PAGE_HEADING_BG_IMAGE', 'http://renovation.thememove.com/data/images/page_heading_bg01.jpg');

/**
 * Post
 */
define('POST_LAYOUT', 'content-sidebar');
define('POST_LAYOUT_HIDE_TAGS', 1);
define('POST_LAYOUT_HIDE_SHARE', 1);
define('POST_LAYOUT_HIDE_READ_MORE', 0);

define('POST_STYLE_HEADING_ENABLE', 1);
define('POST_STYLE_HEADING_TEXT', esc_html__('Blog', 'infinity'));
define('POST_STYLE_HEADING_STYLE', 'bg_color');
define('POST_STYLE_DISABLE_PARALLAX', 0);
define('POST_STYLE_HEADING_FONT_FAMILY', SITE_STYLE_HEADING_FONT_FAMILY);
define('POST_STYLE_HEADING_FONT_SIZE', 36);
define('POST_STYLE_HEADING_FONT_WEIGHT', SITE_STYLE_HEADING_FONT_WEIGHT);
define('POST_STYLE_HEADING_LETTER_SPACING', 0);
define('POST_STYLE_HEADING_FONT_COLOR', '#fff');

define('POST_SPACING_PADDING', '80px 0px 80px 0px');

define('POST_HEADING_BG_COLOR', SECONDARY_COLOR);
define('POST_OVERLAY_BG_COLOR', 'rgba(29,39,54,0.9)');
define('POST_HEADING_BG_IMAGE', 'http://renovation.thememove.com/data/images/page_heading_bg01.jpg');

/*
 * Woocommerce
 */
define('WOO_LAYOUT_CATEGORY', 'content-sidebar');
define('WOO_LAYOUT_SINGLE_PRODUCT', 'full-width');

define('WOO_COLOR_PRIMARY', PRIMARY_COLOR);
define('WOO_COLOR_SECONDARY', SECONDARY_COLOR);
define('WOO_COLOR_HIGH_LIGHT', '#000');
define('WOO_COLOR_CONTENT_BG', '#000');
define('WOO_COLOR_SUBTEXT', '#000');
define('WOO_BUTTON_COLOR', SECONDARY_COLOR);
define('WOO_BUTTON_COLOR_HOVER', '#fff');
define('WOO_BUTTON_BG_COLOR', PRIMARY_COLOR);
define('WOO_BUTTON_BG_COLOR_HOVER', SECONDARY_COLOR);
define('WOO_BUTTON_BORDER_COLOR', PRIMARY_COLOR);
define('WOO_BUTTON_BORDER_COLOR_HOVER', SECONDARY_COLOR);