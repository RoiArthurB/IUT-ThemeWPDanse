<?php 

/*===================================================================
 x                                                                  x
 x                     Rajout des liens du blog                     x
 x                                                                  x
===================================================================*/

add_action('admin_init', 'my_general_section');  
function my_general_section() {  
    add_settings_section(  
        'link_section', // Section ID 
        'Blog links', // Section Title
        'link_section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );
    add_settings_field( // Option 1
        'facebook_link', // Option ID
        'Lien Facebook', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'link_section', // Name of our section (General Settings)
        array( // The $args
            'facebook_link' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 2
        'twitter_link', // Option ID
        'Lien Twitter', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'link_section', // Name of our section
        array( // The $args
            'twitter_link' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 3
        'google_link', // Option ID
        'Lien Google +', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'link_section', // Name of our section
        array( // The $args
            'google_link' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 2
        'instagram_link', // Option ID
        'Lien Instagram', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'link_section', // Name of our section
        array( // The $args
            'instagram_link' // Should match Option ID
        )  
    );

    add_settings_field( // Option 2
        'pinterest_link', // Option ID
        'Lien Pinterest', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'link_section', // Name of our section
        array( // The $args
            'pinterest_link' // Should match Option ID
        )  
    );

    add_settings_field( // Option 2
        'tumblr_link', // Option ID
        'Lien Tumblr', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'link_section', // Name of our section
        array( // The $args
            'tumblr_link' // Should match Option ID
        )  
    );


    register_setting('general','facebook_link', 'esc_attr');
    register_setting('general','twitter_link', 'esc_attr');
    register_setting('general','google_link', 'esc_attr');
    register_setting('general','instagram_link', 'esc_attr');
    register_setting('general','pinterest_link', 'esc_attr');
    register_setting('general','tumblr_link', 'esc_attr');
}

function link_section_options_callback() { // Section Callback
    echo '<p>Mettez les liens (entiers) importants de votre blog ici!</p>';  
}

function link_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}



/**
 * Sample template tag function for outputting a cmb2 file_list
 *
 * @param  string  $file_list_meta_key The field meta key. ('wiki_test_file_list')
 * @param  string  $img_size           Size of image to show
 */
function cmb2_output_file_list( $file_list_meta_key, $img_size = 'medium' ) {

global $redux_starter;
$slider = $redux_starter['dancer-switch-slider'];
$slideSize = $redux_starter['dancer-slide-size'];
// $slideSelectMin = $redux_starter['dancer-slider-select'];
$slidepager = $redux_starter['dancer-switch-pager'];

    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

    if ( $slider == true ){
        if ( is_array($files) ){
            echo '<ul class="bxsliderDancer" data-bx-size="'.$slideSize.'" data-bx-select="'.$slideSelectMin.'" data-bx-pager="'.$slidepager.'">';
            // Loop through them and output an image
            foreach ( (array) $files as $attachment_id => $attachment_url ) {
                echo '<li>';
                echo wp_get_attachment_image( $attachment_id, $img_size );
                echo '</li>';
            }
            echo '</ul>';
        }
    }


}