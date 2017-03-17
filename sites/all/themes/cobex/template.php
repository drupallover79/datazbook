<?php

function cobex_preprocess_html(&$vars) {
    
		
		drupal_add_js(" 
		addEventListener('load', function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
		", "inline");

        drupal_add_js(drupal_get_path('theme', 'cobex') . "/js/move-top.js", array('group' => JS_THEME));
		drupal_add_js(drupal_get_path('theme', 'cobex') . "/js/easing.js", array('group' => JS_THEME));
        
		drupal_add_js(" jQuery(document).ready(function(){
                	$('.scroll').click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});      
        });", "inline");
		
		drupal_add_js(drupal_get_path('theme', 'cobex') . "/js/numscroller-1.0.js", array('group' => JS_THEME));
		drupal_add_js(drupal_get_path('theme', 'cobex') . "/js/classie.js", array('group' => JS_THEME));
		drupal_add_js(drupal_get_path('theme', 'cobex') . "/js/uisearch.js", array('group' => JS_THEME));
		
		drupal_add_js(" 
				new UISearch( document.getElementById( 'sb-search' ) );
				
				$(function () {
				  $('#slider2').responsiveSlides({
					auto: true,
					pager: true,
					speed: 300,
					namespace: 'callbacks',
				  });
				});
				
				$(document).ready(function() {
				  $('#owl-demo2').owlCarousel({
					items : 1,
					lazyLoad : false,
					autoPlay : true,
					navigation : false,
					navigationText :  false,
					pagination : true,
				  });
				});
	
		", array('scope' => 'footer'));
		
		
		drupal_add_js(drupal_get_path('theme', 'cobex') . "/js/responsiveslides.min.js", array('group' => JS_THEME));
		drupal_add_css(path_to_theme() . '/css/owl.carousel.css');		
		drupal_add_js(drupal_get_path('theme', 'cobex') . "/js/owl.carousel.js", array('group' => JS_THEME));
		
		drupal_add_js(drupal_get_path('theme', 'cobex') . "/js/bootstrap.min.js", array('group' => JS_THEME));
		
		
		
			
}