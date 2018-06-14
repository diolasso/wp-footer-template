<?php
/*
Plugin Name: footer template
*/
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'footer_template' ) )
        ->add_fields( array(
            Field::make( 'image', 'footer_logo', 'Logo ' ),
            Field::make( 'text', 'footer_phone_number', 'Phone Number' ),
            Field::make(  'text', 'footer_email', 'Email'),
            Field::make( 'textarea', 'footer_address', 'Address' )
                ->set_rows( 4 ),
            Field::make( 'complex', 'footer_menus' )
                ->set_layout('tabbed-horizontal')
                ->add_fields( array(
                    Field::make('text', 'menu_name'),
                    Field::make('text', 'menu_url')
                )),
            Field::make( 'complex', 'footer_menu_2' )
                ->set_layout('tabbed-horizontal')
                ->add_fields( array(
                    Field::make('text', 'menu_name'),
                    Field::make('text', 'menu_url')
                )),
            Field::make( 'complex', 'footer_social_links' )
                ->set_layout('tabbed-horizontal')
                ->add_fields( array(
                Field::make( 'image', 'social_icon' ),
                Field::make('text', 'social_url')
                )),
            Field::make( 'text', 'footer_name', 'Footer Name' )
        ));
}