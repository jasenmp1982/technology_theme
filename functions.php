<?php require_once( 'inc/extras.php ' ); ?>
<?php

// Scripts & Styles

function theme_scripts() {
    
    // Add Bootstrap default CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );

    // Add Font Awesome stylesheet
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/inc/css/font-awesome.min.css' );
    
    // Add Bootstrap default JS
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/inc/js/bootstrap.min.js', array('jquery') );
    
    // Add Theme JS
    wp_enqueue_script('themejs', get_template_directory_uri().'/inc/js/theme.js', array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Enable support for HTML5 markup.

add_theme_support( 'html5', array(
    
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
    'caption',

) );

?>

<!-- Admin - Theme Options -->

<?php

        function display_twitter_element() {
        
?>

        <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
        
<?php
            
        }
        
?>
       
<?php
        
        function display_theme_panel_fields() {
            
            add_settings_section("section", "All Settings", null, "theme-options");

            add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");

            register_setting("section", "twitter_url");
            
            echo 'hello world';

        }
 
        add_action("admin_init", "display_theme_panel_fields");
        
?>

<?php
    
    function theme_settings_page() {

?>
       

        <div class="wrap">
        
            <h1>Theme Panel</h1>

            <form method="post" action="options.php">

                <?php

                    settings_fields("section");

                    do_settings_sections("theme-options");      

                    submit_button(); 

                ?>          

            </form>
        
        </div>
        <!-- /Wrap -->
<?php
    
    }

?>

<?php

    function add_theme_menu_item(){
    
        add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
    
    }

    add_action("admin_menu", "add_theme_menu_item");

?>


<!-- /Admin - Theme Options -->