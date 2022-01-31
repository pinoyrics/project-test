<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'hicalibertestsite-stylesheet', get_stylesheet_directory_uri() . '/style.css' );
	
	wp_enqueue_script( 'customscript', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script('isopkgd', get_stylesheet_directory_uri() . '/lib/isotope.pkgd.min.js', array(), '1', false );
	wp_enqueue_script('lazyload', get_stylesheet_directory_uri() . '/lib/lazyload.min.js', array(), '1', false );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*== CUSTOM EXCERPT LENTGH ==*/
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
    $excerpt = preg_replace('`\[[^\]]*\]`','', $excerpt);
	return $excerpt;
}

/*== SECTION SETTINGS VARIABLES ==*/
function section_settings($ssettings) {
	while ( have_rows('section_settings') ) : the_row();
		if( get_sub_field('custom_id') ) :
			$section_id = get_sub_field('custom_id');
		else: 
			$section_id = 'page_section_1';
		endif;
		if( get_sub_field('custom_class') ) :
			$section_class = " " . get_sub_field('custom_class');
		else : 
			$section_class = "";
		endif;
		
	endwhile;
	
	$ssvariables = ( array (
		'customClass' => $section_class,
		'customID' => $section_id
	));
	return $ssvariables[$ssettings];
}


