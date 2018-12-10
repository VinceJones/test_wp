<?php
/*
Plugin Name: NERD Products
Plugin URI: https://vincentjonesmuth.com
Description: Test products shortcodeS.
Author: Vincent Jones-Muth
Version: 1.0
License: GPLv2 or later
*/

define( 'NERD_PRODUCTS_PATH', dirname( __FILE__ ) );
define( 'NERD_PRODUCTS_RELATIVE_PATH', dirname( plugin_basename( __FILE__ )));
define( 'NERD_PRODUCTS_URL', plugin_dir_url( __FILE__ ));

/**
 * @param array $atts
 *   The attributes.
 *
 * @return string
 *   The shortcode.
 */
function nerd_products_hello_world_shortcode( $atts ) {
  $a = shortcode_atts( array(
    'name' => 'world'
  ), $atts );

  $return_html =
    "<div>
      <div></div>
      <h1>Hello" . $a['name'] . "!</h1>
      <p>Points : " . $atts['points'] . "</p>
      <hr/>
    </div>";

  $product_html =
    '<div>
      <div class="product">
        
        <div class="productListing-media">
          <a href="#">
            <img src="http://placehold.jp/150x150.png" />
          </a>
        </div>
    
        <div class="productListing-content">
    
          <div class="productListing-content-category">
            Brand - Category - ' . $atts['points'] . '
          </div>
    
          <div class="productListing-content-hd">
            <a href="#">Product Title</a>
          </div>
    
          <div class="productListing-content-bd isHiddenSM">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus urna sit amet nulla finibus varius.</p>
          </div>
    
          <div class="productListing-content-ft">
            <a href="#"
               class="productListing-content-ft-btn productListing-content-ft-btn_primary">
              <span class="productListing-content-ft-btn-label">Go to Product</span>
            </a>
          </div>
        </div>
      </div>
    </div>';

  return $product_html;
}

add_shortcode( 'helloworld', 'nerd_products_hello_world_shortcode' );