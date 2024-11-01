<?php
// load scripts and styles
function clx_wpi_load_res() {
	wp_enqueue_style( 'clx-wpi-mdi-style', plugins_url( 'css/md-icons.min.css', __FILE__ ) );
	wp_enqueue_style( 'clx-wpi-dmo-style', plugins_url( 'css/style.min.css', __FILE__ ) );
	wp_enqueue_style( 'clx-wpi-ani-style', plugins_url( 'css/anim.min.css', __FILE__ ) );

	wp_enqueue_script( 'clx-wpi-aniscrpt', plugins_url( 'js/anim.min.js', __FILE__ ) );
	wp_enqueue_script( 'clx-wpi-progress', plugins_url( 'js/progress.min.js', __FILE__ ) );
}
