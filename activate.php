<?php
/*
Plugin Name: footer template
*/
use Carbon_Fields\Container;
use Carbon_Fields\Field;

//admin interface
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'footer_template' ) )
        ->add_fields( array(
            Field::make( 'image', 'footer_logo', 'Logo' ),
            Field::make( 'text', 'footer_logo_url', 'Logo URL'),
            Field::make( 'text', 'footer_phone_number', 'Phone Number' ),
            Field::make(  'text', 'footer_email', 'Email'),
            Field::make( 'textarea', 'footer_address', 'Address' )
                ->set_rows( 4 ),
            Field::make( 'complex', 'footer_menus', 'Menu Name And URL' )
                ->set_layout('tabbed-horizontal')
                ->add_fields( array(
                    Field::make('text', 'menu_name'),
                    Field::make('text', 'menu_url')
                )),
            Field::make( 'complex', 'footer_menus_2', 'Second Menu' )
                ->set_layout('tabbed-horizontal')
                ->add_fields( array(
                    Field::make('text', 'menu_name'),
                    Field::make('text', 'menu_url')
                )),
            Field::make( 'complex', 'footer_social_links', 'Socail Links Logo and URL' )
                ->set_layout('tabbed-horizontal')
                ->add_fields( array(
                Field::make( 'image', 'social_icon' ),
                Field::make('text', 'social_url')
                )),
            Field::make( 'text', 'footer_name', 'Footer Name' )
        ));
}

//front-end
add_action( 'wp_footer', 'add_footer_template' );
function add_footer_template() {
    include_once(dirname(__FILE__).'/footer-templates/footer-template-heni.php');
}
