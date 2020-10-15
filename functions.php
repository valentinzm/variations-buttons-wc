add_action('wp_ajax_add_item', 'cart_add_item');
add_action('wp_ajax_nopriv_add_item', 'cart_add_item');
function cart_add_item(){
	$product_id = $_POST['id'];
	$quantity = $_POST['qty'];
	//$variation = $_POST['variation'];
	WC()->cart->add_to_cart( $product_id, $quantity);
	// if( $variation == ''){
	// 	WC()->cart->add_to_cart( $product_id );
	// } else {
	// 	WC()->cart->add_to_cart( $variation );
	// }
}