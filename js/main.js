/*--------------------------------------------------------------
 Custom js
 --------------------------------------------------------------*/
var snapper = new Snap( {
	element: document.getElementById( 'page' ),
	dragger: document.getElementsByClassName( 'page' ),
	//disable: 'right',
	slideIntent: 10,
} );
var addEvent = function addEvent( element, eventName, func ) {
	if ( element == null ) {
		return;
	}
	if ( element.addEventListener ) {
		return element.addEventListener( eventName, func, false );
	} else if ( element.attachEvent ) {
		return element.attachEvent( "on" + eventName, func );
	}
};
addEvent( document.getElementById( 'open-left' ), 'click', function() {
	snapper.open( 'left' );
} );
addEvent( document.getElementById( 'open-right' ), 'click', function() {
	snapper.open( 'right' );
} );
jQuery( document ).ready( function( $ ) {
	'use strict';

	//setup parallax
	$.stellar( {
		horizontalScrolling: false,
		scrollProperty: 'scroll',
		positionProperty: 'position'
	} );

	//project details page
	$( '.gallery,.single-featured' ).magnificPopup( {
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		removalDelay: 300,
		mainClass: 'mfp-fade',
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300,
			easing: 'ease-in-out'
		}
	} );

	$( ".single-project .gallery" ).owlCarousel( {
		nav: false,
		dots: false,
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout: 3000,
		margin: 15,
		responsive: {
			0: {
				items: 2
			},
			768: {
				items: 3
			},
			1024: {
				items: 6
			}
		}
	} );

	// mini-cart
	var $mini_cart = $( '.mini-cart' );
	$mini_cart.on( 'click', function( e ) {
		$( this ).addClass( 'open' );
	} );

	$( document ).on( 'click', function( e ) {
		if ( $( e.target ).closest( $mini_cart ).length == 0 ) {
			$mini_cart.removeClass( 'open' );
		}
	} );

	// search in menu
	var $search_btn = $( '.search-box > i' ),
		$search_form = $( 'form.search-form' );

	$search_btn.on( 'click', function() {
		$search_form.toggleClass( 'open' );
	} );

	$( document ).on( 'click', function( e ) {
		if ( $( e.target ).closest( $search_btn ).length == 0
		     && $( e.target ).closest( 'input.search-field' ).length == 0
		     && $search_form.hasClass( 'open' ) ) {
			$search_form.removeClass( 'open' );
		}
	} );

	// mega menu position for header02
	var $leftVal = 0;

	$( '.header02 #site-navigation .menu > li' ).each( function() {
		if ( !$( this ).hasClass( 'mega-menu' ) ) {
			$leftVal += $( this ).outerWidth();
		} else {
			$( '.header02 #site-navigation li.mega-menu .sub-menu' ).css( 'left', '-' + $leftVal + 'px' );
			return;
		}
	} );

	//setting dynamic padding top value for navigation of header03
	function caculatePaddingTop( element ) {
		var $this = $( element );
		var $header_height = $( '.site-header' ).outerHeight();
		var $height = $this.height();
		var $padding_top = ($header_height - $height) / 2;

		if ( !$this.parent().hasClass( 'menu-item-has-children' ) ) {
			$padding_top -= 1;
		}

		return $padding_top;
	}

	$( '.header03 #site-navigation .menu > li > a' ).each( function() {
		$( this ).css( 'padding-top', caculatePaddingTop( $( this ) ) + 'px' );
	} );
} );


