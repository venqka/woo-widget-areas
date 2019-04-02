<?php


//Product Category before content
$product_category_before_content_args = array(
	'name'          => __( 'Product category before content', 'dn' ),
	'id'            => 'product-category-before-content',
	'description'   => __( 'This widget area is placed before the content on product category template', 'dn' ),
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s wwa product-category-before-content">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
);
register_sidebar( $product_category_before_content_args );

//Single product before add to cart
$single_product_before_add_to_cart_button_args = array(
	'name'          => __( 'Single product before add to cart button', 'dn' ),
	'id'            => 'single-product-before-add-to-cart',
	'description'   => __( 'This widget area is placed before the add to cart button on single product', 'dn' ),
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s wwa single-product-before-add-to-cart">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
);
register_sidebar( $single_product_before_add_to_cart_button_args );

//Single product after add to cart
$single_product_after_add_to_cart_button_args = array(
	'name'          => __( 'Single product after add to cart button', 'dn' ),
	'id'            => 'single-product-after-add-to-cart',
	'description'   => __( 'This widget area is placed after the add to cart button on single product', 'dn' ),
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s wwa single-product-after-add-to-cart">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
);
register_sidebar( $single_product_after_add_to_cart_button_args );


