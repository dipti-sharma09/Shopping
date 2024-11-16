<?php
/**
 * @author  SastraWP
 * @since   1.0.0
 * @version 1.0.0
 */

$opt_name = TMPCODER_THEME_OPTION_NAME;

Redux::setSection( $opt_name,
    array(
        'title' => esc_html__( 'General Options','sastrawp' ),
        'id'    => 'tmpcoder_general_options',
        'icon'  => 'el el-cog',
    )
);

$menus = wp_get_nav_menus();
$menuName = [];
foreach ($menus as $key => $value) {
    $menuName[$value->term_id] = $value->name; 
}

Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Header Options','sastrawp' ),
        'id'      => 'tmpcoder_header_options',
        'subsection' => true,
        'heading' => '',
        'fields'  => array(
            array(
                'id'       => 'tmpcoder_logo_image',
                'type'     => 'media',
                'title'    => esc_html__( 'Logo Image','sastrawp' ),
                'subtitle' => esc_html__( 'Upload your logo','sastrawp' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/assets/images/logo.png'
                ),
            ),
            array(
                'id'       => 'tmpcoder_logo_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Logo Text','sastrawp' ),             
                'subtitle' => esc_html__( 'Set your logo text here','sastrawp' ),
                'default'  => 'SastraWP'              
            ),
            array(
                'id'       => 'tmpcoder_fav_site_icon',
                'type'     => 'media',
                'title'    => esc_html__( 'Favicon Icon','sastrawp' ),
                'subtitle' => esc_html__( 'Define favicon icon path here','sastrawp' ),
                'default'  => array(
                    'url'=> get_template_directory_uri() . '/assets/images/fav-icon.png'
                ),
            ),

            array(
                'id'       => 'tmpcoder_pre_loder',
                'type'     => 'switch',
                'title'    => esc_html__('Site Preloader','sastrawp'), 
                'subtitle'         => __('show this option before site load.','sastrawp'),
                'on' => esc_html__('Enable','sastrawp'),
                'off' => esc_html__('Disable','sastrawp'),
            ),
            array( 
                'id'               => 'tmpcoder_preloder_custom_html',
                'type'             => 'editor',
                'title'            => __('Preloader Custom Html','sastrawp'), 
                'desc'     => __('This is show before load website custom preloader','sastrawp'),
                'default'          => '<img src="'.get_template_directory_uri().'/assets/images/loader.gif" alt="" width="80" height="80">',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            ),
        )
    ) 
);

Redux::setSection( $opt_name,
    array(
        'title'   => esc_html__( 'Footer Options','sastrawp' ),
        'id'      => 'tmpcoder_footer_options',
        'subsection' => true,
        'heading' => '',
        'fields'  => array(
            array(
                'id'               => 'tmpcoder_footer_copyright_text',
                'type'             => 'editor',
                'title'            => __('Footer Copyright','sastrawp'),
                'subtitle'         => __('Footer copyright show in default footer. <br> Dynamic footer text change from Sastra Addons > Site Builder > Footer','sastrawp'),
                'description' => sprintf(
                    /* translators: %s is replaced by copyright symbol, current year, and site title */
                    'Shortcode List: [COPYRIGHT] = %1$s, [CURRENT_YEAR] = %2$s, [SITE_TITLE] = %3$s ',
                    /* Escaping dynamic content for safe output */
                    '&copy;',
                    esc_html(gmdate('Y')),
                    esc_html(get_bloginfo('name'))
                ),
                'default' => sprintf(
                    /* translators: %1$s is the URL, %2$s is the theme name */
                    'Copyright [COPYRIGHT] [CURRENT_YEAR] [SITE_TITLE] | Powered by <a href="%1$s" target="_blank" rel="noopener noreferrer">%2$s</a>',
                    esc_url('https://sastraessentialaddons.com/'),
                    esc_html('SastraWP WordPress Theme')
                ),
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 10
                )
            ),            
        ),
    )
);