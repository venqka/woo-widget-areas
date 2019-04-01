<?php


//Product Category before content
$product_category_before_content_args = array(
	'name'          => __( 'Product category before content', 'dn' ),
	'id'            => 'product-category-before-content',
	'description'   => __( 'This widget area is placed before the content on product category template', 'dn' ),
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s product-category-before-content">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
);
register_sidebar( $product_category_before_content_args );

//Product Category before content
$single_product_before_add_to_cart_button_args = array(
	'name'          => __( 'Single product before add to cart button', 'dn' ),
	'id'            => 'product-category-before-content',
	'description'   => __( 'This widget area is placed before the add to cart button on single product', 'dn' ),
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s product-category-before-content">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
);
register_sidebar( $single_product_before_add_to_cart_button_args );


