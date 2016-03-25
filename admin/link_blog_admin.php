<?php 

add_action('admin_init', 'my_general_section');  
function my_general_section() {  
    add_settings_section(  
        'link_section', // Section ID 
        'Blog links', // Section Title
        'link_section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );
    add_settings_field( // Option 2
        'facebook_link', // Option ID
        'Lien Facebook', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed
        'link_section', // Name of our section (General Settings)
        array( // The $args
            'facebook_link' // Should match Option ID
        )  
    ); 

    add_settings_field( // Option 1
        'twitter_link', // Option ID
        'Lien Twitter', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'link_section', // Name of our section
        array( // The $args
            'twitter_link' // Should match Option ID
        )  
    );

    add_settings_field( // Option 1
        'google_link', // Option ID
        'Lien Google +', // Label
        'link_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'link_section', // Name of our section
        array( // The $args
            'google_link' // Should match Option ID
        )  
    ); 


    register_setting('general','facebook_link', 'esc_attr');
    register_setting('general','twitter_link', 'esc_attr');
    register_setting('general','google_link', 'esc_attr');
}

function link_section_options_callback() { // Section Callback
    echo '<p>Mettez les liens importants de votre blog ici</p>';  
}

function link_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}