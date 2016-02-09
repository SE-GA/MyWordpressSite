<?php

function notice(){
	$message = sprintf( __( 'Hi! You used now my theme. Thank you for that!', 'twentysixteen' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

add_action( 'admin_notices', 'notice' );