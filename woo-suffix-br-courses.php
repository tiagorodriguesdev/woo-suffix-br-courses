<?php
/*
 * Plugin Name: WooCommerce Products Suffix for Brazilian Courses
 * Plugin URI: https://tiagorodrigues.dev
 * Description: Este plugin adiciona automaticamente o sufixo e-book a todos os produtos ao finalizar uma compra. Não altera o nome original do produto, apenas permite que os pedidos sejam emitidos como NF-e por ser um e-book e não um curso.
 * Version: 1.0
 * Author: Tiago Rodrigues
 * Author URI: https://tiagorodrigues.dev
 * Requires at least: 5.8
 * Requires PHP: 7.2
 *
*/
defined( 'ABSPATH') || exit;

/* Adds suffix "/ e-book" to every single item in order */

add_action( 'woocommerce_checkout_create_order_line_item', 'product_suffix_for_brazilian_courses', 20, 4 );

function product_suffix_for_brazilian_courses( $item, $cart_item_key, $values, $order ) {
    
    $product_name = $item->get_name();
    $new_name = $product_name . ' / e-Book';

    if ( ! empty( $new_name ) ){
        $item['name']	= $new_name;
    }

}