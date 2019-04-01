<?php

//Product category before content widget area

function product_category_before_content_widget_area() {

	if( is_product_category() ) {
		dynamic_sidebar( 'product-category-before-content' );
	}
}
add_action( 'woocommerce_before_main_content', 'product_category_before_content_widget_area' );
