<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "dn_option";
    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        'display_name'         => 'Web Options',
        'display_version'      => '1.0',
        'menu_type'            => 'menu',
        'allow_sub_menu'       => false,
        'menu_title'           => __( 'Web Options', 'digitalnoir-option' ),
        'page_title'           => __( 'Web Options', 'digitalnoir-option' ),
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'admin_bar_priority'   => 50,
        'global_variable'      => '',
        'dev_mode'             => false, // Show the time the page took to load, etc
        'update_notice'        => false,
        'customizer'           => true,
        'page_priority'        => null,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'menu_icon'            => '',
        'last_tab'             => '',
        'page_icon'            => 'icon-themes',
        'page_slug'            => '',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => false,

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'footer_credit'				 => false,                   // Disable the footer credit of Redux. Please leave if you can help it.
        'database'             => '',
        'system_info'          => false,


        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );


    // Add content after the form.
    $args['footer_text'] = __( '<p>Build with love from digitalnoir.</p>', 'digitalnoir-option' );
    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */



    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title' => __( 'Social Media', 'digitalnoir-option' ),
        'id'    => 'social_media',
        'desc'  => __( '', 'digitalnoir-option' ),
        'icon'  => 'el el-icon-twitter',
				'fields'     => array(
						array(
                'id'       => 'social_facebook',
                'type'     => 'text',
                'title'    => __( 'Facebook', 'digitalnoir-option' ),
                'subtitle' => __( 'Please type your facebook profile/page URL here', 'digitalnoir-option' ),
            ),
						array(
                'id'       => 'social_twitter',
                'type'     => 'text',
                'title'    => __( 'Twitter', 'digitalnoir-option' ),
                'subtitle' => __( 'Please type your twitter username here (without @)', 'digitalnoir-option' ),
            ),
						array(
                'id'       => 'social_instagram',
                'type'     => 'text',
                'title'    => __( 'Instagram', 'digitalnoir-option' ),
                'subtitle' => __( 'Please type your instagram URL here', 'digitalnoir-option' ),
            ),
						array(
                'id'       => 'social_youtube',
                'type'     => 'text',
                'title'    => __( 'Youtube', 'digitalnoir-option' ),
                'subtitle' => __( 'Please type your youtube URL here', 'digitalnoir-option' ),
            ),
				)
    ) );

   

    /*
     * <--- END SECTIONS
     */
