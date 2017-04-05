<?php

function register_mplinks_link_options() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_sub_page(array(
      'page_title'  => 'Links',
      'menu_title'  => 'Links',
      'menu_slug'   => 'theme-mplinks-links',
      'parent_slug' => 'theme-mplinks-settings',
    ));
  }

  if( function_exists('acf_add_local_field_group') ) {

    acf_add_local_field_group(array (
      'key' => 'group_57e4a23dbdaaD',
      'title' => 'Link fields',
      'fields' => array (
        array (
          'key' => 'field_58d0bdf7db6a6',
          'label' => 'Links',
          'name' => 'mplinks_links',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'collapsed' => 'field_58d0bdffdb6a7',
          'min' => '',
          'max' => '',
          'layout' => 'table',
          'button_label' => 'Add Link',
          'sub_fields' => array (
            array (
              'key' => 'field_58d0bdffdb6a7',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
              'instructions' => 'Title for the Link',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_58d0be14db6a8',
              'label' => 'URL',
              'name' => 'url',
              'type' => 'url',
              'instructions' => '',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
            ),
            array (
              'key' => 'field_58d0be23db6a9',
              'label' => 'Class',
              'name' => 'class',
              'type' => 'text',
              'instructions' => 'Used to style the link. eg "button"',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
          ),
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'theme-mplinks-links',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ));

  }
}

add_action('acf/include_fields', 'register_mplinks_link_options', 14);
