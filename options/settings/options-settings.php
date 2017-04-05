<?php
function register_mplinks_general_options() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'  => 'Settings',
      'menu_title'  => 'MPLinks',
      'menu_slug'   => 'theme-mplinks-settings',
      'capability'  => 'edit_posts',
      'icon_url'    => plugin_dir_url( __FILE__ ) . 'mpl.png',
      'redirect'    => false
    ));
  }

  if( function_exists('acf_add_local_field_group') ) {

    acf_add_local_field_group(array (
      'key' => 'group_57e335745563b',
      'title' => 'Link Settings',
      'fields' => array (
        array (
          'key' => 'field_58d0ca5e9f3a9',
          'label' => 'Shortcode',
          'name' => '',
          'type' => 'message',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => 'To use MPLinks. Use the following shortcode `[mplinks header="true|false" class="mplinks__links"]`
                        Header will show the "header content" in the settings section.
                        Class will add a class to the links wrapper.',
          'new_lines' => 'wpautop',
          'esc_html' => 0,
        ),
        array (
          'key' => 'field_58d0bd97db6a5',
          'label' => 'Header Content',
          'name' => 'mplinks_header',
          'type' => 'wysiwyg',
          'instructions' => 'This is what shows above the links. This will be displayed if "header=true" is part of the shortcode. Mainly used when creating a page for just links.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'tabs' => 'all',
          'toolbar' => 'full',
          'media_upload' => 1,
        ),
        array (
          'key' => 'field_58d0be89db6aa',
          'label' => 'Custom CSS',
          'name' => 'mplinks_custom_css',
          'type' => 'textarea',
          'instructions' => 'This can be used to declare classes for button styles.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'maxlength' => '',
          'rows' => '',
          'new_lines' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'theme-mplinks-settings',
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

add_action('acf/include_fields', 'register_mplinks_general_options', 10);
