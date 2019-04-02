<?php

//Product category before content widget area

function product_category_before_content_widget_area() {

	if( is_product_category() ) {
		dynamic_sidebar( 'product-category-before-content' );
	}
}
add_action( 'woocommerce_before_main_content', 'product_category_before_content_widget_area' );

function single_product_before_add_to_cart_button() {

	if( is_product() ) {
		dynamic_sidebar( 'single-product-before-add-to-cart' );
	}
			
}
add_action( 'woocommerce_before_add_to_cart_button', 'single_product_before_add_to_cart_button' );

function single_product_after_add_to_cart_button() {

	if( is_product() ) {
		dynamic_sidebar( 'single-product-after-add-to-cart' );
	}
			
}
add_action( 'woocommerce_after_add_to_cart_button', 'single_product_after_add_to_cart_button' );