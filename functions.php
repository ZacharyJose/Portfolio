

<?php



/**
 * @package WordPress
 * @subpackage twentyseventeen
 */
 
 
/*function my_theme_enqueue_styles() {
 
    $parent_style = 'twentyseventeen-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Additional php code goes here
*/

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {

$parent_style = 'twentyseventeen-style'; // This is 'twentyseventeen-style' for the Twenty seventeen theme.

wp_enqueue_style ( $parent_style, get_template_directory_uri() .'/style.css' );

wp_enqueue_style(
'twentyseventeen-style-enfant',
get_stylesheet_directory_uri() .'/style.css',
array(),
filemtime( get_stylesheet_directory() .'/style.css' )
);

/*wp_enqueue_script(
    'animation',
    get_stylesheet_directory_uri() . '/js/animation.js',
    array(),
    filemtime( get_stylesheet_directory() . '/js/animation.js' )
	
);
*/



add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_register_script(
       'skillbar', 
       get_stylesheet_directory_uri() . '/js/skillbar.js', 
       array('jquery')
    );

    wp_enqueue_script('skillbar');
}




}




?>
