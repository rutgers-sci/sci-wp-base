<?php

class ET_Builder_Module_Fullwidth_Header extends ET_Builder_Module {
	function init() {
		$this->name             = esc_html__( 'Fullwidth Header', 'et_builder' );
		$this->slug             = 'et_pb_fullwidth_header';
		$this->vb_support       = 'on';
		$this->fullwidth        = true;
		$this->main_css_element = '%%order_class%%';

		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Text', 'et_builder' ),
					'links'        => esc_html__( 'Links', 'et_builder' ),
					'images'       => esc_html__( 'Images', 'et_builder' ),
					'background'   => esc_html__( 'Background', 'et_builder' ),
				),
			),
			'advanced' => array(
				'toggles' => array(
					'layout'        => esc_html__( 'Layout', 'et_builder' ),
					'scroll_down'   => esc_html__( 'Scroll Down Icon', 'et_builder' ),
					'image'         => array(
						'title' => esc_html__( 'Image', 'et_builder' ),
					),
					'overlay'       => esc_html__( 'Overlay', 'et_builder' ),
					'text'          => array(
						'title'    => esc_html__( 'Text', 'et_builder' ),
						'priority' => 49,
					),
					'width'       => array(
						'title'    => esc_html__( 'Sizing', 'et_builder' ),
						'priority' => 80,
					),
				),
			),
			'custom_css' => array(
				'toggles' => array(
					'attributes' => array(
						'title'    => esc_html__( 'Attributes', 'et_builder' ),
						'priority' => 95,
					),
				),
			),
		);

		$this->advanced_fields = array(
			'fonts'      => array(
				'title' => array(
					'label'    => esc_html__( 'Title', 'et_builder' ),
					'css'      => array(
						'main' => '%%order_class%%.et_pb_fullwidth_header .header-content h1, %%order_class%%.et_pb_fullwidth_header .header-content h2.et_pb_module_header, %%order_class%%.et_pb_fullwidth_header .header-content h3.et_pb_module_header, %%order_class%%.et_pb_fullwidth_header .header-content h4.et_pb_module_header, %%order_class%%.et_pb_fullwidth_header .header-content h5.et_pb_module_header, %%order_class%%.et_pb_fullwidth_header .header-content h6.et_pb_module_header',
					),
					'font_size' => array(
						'default'      => '30px',
					),
					'line_height'    => array(
						'default' => '1em',
					),
					'letter_spacing' => array(
						'default' => '0px',
					),
					'header_level' => array(
						'default' => 'h1',
					),
				),
				'content' => array(
					'label'    => esc_html__( 'Body', 'et_builder' ),
					'css'      => array(
						'main' => '%%order_class%%.et_pb_fullwidth_header .et_pb_header_content_wrapper',
					),
					'font_size' => array(
						'default'      => '14px',
					),
					'line_height'    => array(
						'default' => '1em',
					),
					'letter_spacing' => array(
						'default' => '0px',
					),
				),
				'subhead' => array(
					'label'    => esc_html__( 'Subhead', 'et_builder' ),
					'css'      => array(
						'main' => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_subhead',
					),
					'line_height'    => array(
						'default' => '1em',
					),
					'letter_spacing' => array(
						'default' => '0px',
					),
				),
			),
			'button'     => array(
				'button_two' => array(
					'label' => esc_html__( 'Button Two', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .et_pb_button_two.et_pb_button",
					),
					'box_shadow' => array(
						'css' => array(
							'main' => '%%order_class%% .et_pb_button_two',
						),
					),
				),
				'button_one' => array(
					'label' => esc_html__( 'Button One', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} .et_pb_button_one.et_pb_button",
					),
					'box_shadow' => array(
						'css' => array(
							'main' => '%%order_class%% .et_pb_button_one',
						),
					),
				),
			),
			'background' => array(
				'css'     => array(
					'main' => '.et_pb_fullwidth_header%%order_class%%',
				),
				'options' => array(
					'background_color' => array(
						'default'          => et_builder_accent_color(),
					),
					'parallax_method' => array(
						'default' => 'off',
					),
				),
			),
			'max_width'  => array(
				'css' => array(
					'important' => 'all',
				),
			),
			'text'       => array(
				'use_text_orientation' => false,
				'use_background_layout' => true,
				'css' => array(
					'text_shadow' => '%%order_class%% .header-content',
				),
				'options' => array(
					'background_layout' => array(
						'default' => 'dark',
					),
				),
			),
			'filters'    => array(
				'css' => array(
					'main' => array(
						'%%order_class%%',
					),
				),
				'child_filters_target' => array(
					'tab_slug' => 'advanced',
					'toggle_slug' => 'image',
				),
			),
			'image'      => array(
				'css' => array(
					'main' => array(
						'%%order_class%% .header-logo',
						'%%order_class%% .header-image-container',
					),
				),
			),
		);

		$this->custom_css_fields = array(
			'header_container' => array(
				'label'    => esc_html__( 'Header Container', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container',
			),
			'header_image' => array(
				'label'    => esc_html__( 'Header Image', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_container .header-image img',
			),
			'logo' => array(
				'label'    => esc_html__( 'Logo', 'et_builder' ),
				'selector' => '.header-content img.header-logo',
			),
			'title' => array(
				'label'    => esc_html__( 'Title', 'et_builder' ),
				'selector' => '%%order_class%% .header-content h1,%%order_class%% .header-content .et_pb_module_header',
			),
			'content' => array(
				'label'    => esc_html__( 'Content', 'et_builder' ),
				'selector' => '%%order_class%%.et_pb_fullwidth_header .et_pb_header_content_wrapper',
			),
			'subtitle' => array(
				'label'    => esc_html__( 'Subtitle', 'et_builder' ),
				'selector' => '.header-content .et_pb_fullwidth_header_subhead',
			),
			'button_1' => array(
				'label'    => esc_html__( 'Button One', 'et_builder' ),
				'selector' => '.header-content-container .header-content .et_pb_button_one.et_pb_button',
			),
			'button_2' => array(
				'label'    => esc_html__( 'Button Two', 'et_builder' ),
				'selector' => '.header-content-container .header-content .et_pb_button_two.et_pb_button',
			),
			'scroll_button' => array(
				'label'    => esc_html__( 'Scroll Down Button', 'et_builder' ),
				'selector' => '.et_pb_fullwidth_header_scroll a .et-pb-icon',
			),
		);

		$this->help_videos = array(
			array(
				'id'   => esc_html( 'llLBZCNCEGk' ),
				'name' => esc_html__( 'An introduction to the Fullwidth Header module', 'et_builder' ),
			),
		);
	}

	function get_fields() {
		$fields = array(
			'title' => array(
				'label'           => esc_html__( 'Title', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter your page title here.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'subhead' => array(
				'label'           => esc_html__( 'Subheading Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'If you would like to use a subhead, add it here. Your subhead will appear below your title in a small font.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'text_orientation' => array(
				'label'             => esc_html__( 'Text & Logo Orientation', 'et_builder' ),
				'type'              => 'text_align',
				'option_category'   => 'layout',
				'options'           => et_builder_get_text_orientation_options( array( 'justified' ) ),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'layout',
				'description'       => esc_html__( 'This controls how your text is aligned within the module.', 'et_builder' ),
				'default_on_front'  => 'left',
			),

			'header_fullscreen' => array(
				'label'           => esc_html__( 'Make Fullscreen', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'default_on_front' => 'off',
				'affects'           => array(
					'content_orientation',
				),
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'layout',
				'description'     => esc_html__( 'Here you can choose whether the header is expanded to fullscreen size.', 'et_builder' ),
			),
			'header_scroll_down' => array(
				'label'           => esc_html__( 'Show Scroll Down Button', 'et_builder' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'et_builder' ),
					'on'  => esc_html__( 'Yes', 'et_builder' ),
				),
				'default_on_front' => 'off',
				'affects'           => array(
					'scroll_down_icon',
				),
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'scroll_down',
				'description'       => esc_html__( 'Here you can choose whether the scroll down button is shown.', 'et_builder' ),
			),
			'scroll_down_icon' => array(
				'default'             => ';',
				'label'               => esc_html__( 'Icon', 'et_builder' ),
				'type'                => 'select_icon',
				'option_category'     => 'configuration',
				'class'               => array( 'et-pb-font-icon' ),
				'renderer_options'    => array(
					'icons_list' => 'icon_down',
				),
				'description'         => esc_html__( 'Choose an icon to display for the scroll down button.', 'et_builder' ),
				'depends_show_if'     => 'on',
				'tab_slug'            => 'advanced',
				'toggle_slug'         => 'scroll_down',
			),
			'scroll_down_icon_color' => array(
				'label'             => esc_html__( 'Scroll Down Icon Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'scroll_down',
			),
			'scroll_down_icon_size' => array(
				'label'           => esc_html__( 'Scroll Down Icon Size', 'et_builder' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'mobile_options'  => true,
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'scroll_down',
				'responsive'      => true,
				'default_unit'    => 'px',
			),
			'button_one_text' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s Text', 'et_builder' ), '#1' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the text for the Button.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'button_one_url' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s URL', 'et_builder' ), '#1' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the URL for the Button.', 'et_builder' ),
				'toggle_slug'     => 'links',
			),
			'button_two_text' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s Text', 'et_builder' ), '#2' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the text for the Button.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'button_two_url' => array(
				'label'           => sprintf( esc_html__( 'Button %1$s URL', 'et_builder' ), '#2' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the URL for the Button.', 'et_builder' ),
				'toggle_slug'     => 'links',
			),
			'background_overlay_color' => array(
				'label'             => esc_html__( 'Background Overlay Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'overlay',
			),
			'logo_image_url' => array(
				'label'              => esc_html__( 'Logo Image URL', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
				'affects'            => array(
					'logo_alt_text',
					'logo_title',
				),
				'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'et_builder' ),
				'toggle_slug'        => 'images',
			),
			'logo_alt_text' => array(
				'label'           => esc_html__( 'Logo Image Alternative Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_show_if' => 'on',
				'depends_on'      => array(
					'logo_image_url',
				),
				'description'     => esc_html__( 'This defines the HTML ALT text. A short description of your image can be placed here.', 'et_builder' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'logo_title' => array(
				'label'           => esc_html__( 'Logo Image Title', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_show_if' => 'on',
				'depends_on'      => array(
					'logo_image_url',
				),
				'description'     => esc_html__( 'This defines the HTML Title text.', 'et_builder' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'content_orientation' => array(
				'label'           => esc_html__( 'Text Vertical Alignment', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'center'  => esc_html__( 'Center', 'et_builder' ),
					'bottom' => esc_html__( 'Bottom', 'et_builder' ),
				),
				'default_on_front' => 'center',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'text',
				'description'     => esc_html__( 'This setting determines the vertical alignment of your content. Your content can either be vertically centered, or aligned to the bottom.', 'et_builder' ),
				'depends_show_if' => 'on',
			),

			'header_image_url' => array(
				'label'              => esc_html__( 'Header Image URL', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
				'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'et_builder' ),
				'toggle_slug'        => 'images',
				'affects'            => array(
					'image_alt_text',
					'image_title',
				),
			),
			'image_alt_text' => array(
				'label'           => esc_html__( 'Header Image Alternative Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_show_if' => 'on',
				'depends_on'      => array(
					'header_image_url',
				),
				'description'     => esc_html__( 'This defines the HTML ALT text. A short description of your image can be placed here.', 'et_builder' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'image_title' => array(
				'label'           => esc_html__( 'Header Image Title', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_show_if' => 'on',
				'depends_on'      => array(
					'header_image_url',
				),
				'description'     => esc_html__( 'This defines the HTML Title text.', 'et_builder' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'image_orientation' => array(
				'label'           => esc_html__( 'Image Vertical Alignment', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'center'  => esc_html__( 'Vertically Centered', 'et_builder' ),
					'bottom' => esc_html__( 'Bottom', 'et_builder' ),
				),
				'default_on_front' => 'center',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'image',
				'description'     => esc_html__( 'This controls the orientation of the image within the module.', 'et_builder' ),
			),
			'content' => array(
				'label'           => esc_html__( 'Content', 'et_builder' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear below the subheading text.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'content_max_width' => array(
				'label'           => esc_html__( 'Content Width', 'et_builder' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'default'         => '100%',
				'default_unit'    => '%',
				'default_on_front' => '',
				'allow_empty'     => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '100',
					'step' => '1',
				),
				'responsive'      => true,
			),
			'title_font_color' => array(
				'type' => 'hidden',
			),
			'subhead_font_color' => array(
				'type' => 'hidden',
			),
			'content_font_color' => array(
				'type' => 'hidden',
			),
		);

		return $fields;
	}

	function render( $attrs, $content = null, $render_slug ) {
		$title                        = $this->props['title'];
		$subhead                      = $this->props['subhead'];
		$background_layout            = $this->props['background_layout'];
		$text_orientation             = $this->get_text_orientation();
		$button_one_text              = $this->props['button_one_text'];
		$button_one_url               = $this->props['button_one_url'];
		$button_one_rel               = $this->props['button_one_rel'];
		$button_two_text              = $this->props['button_two_text'];
		$button_two_url               = $this->props['button_two_url'];
		$button_two_rel               = $this->props['button_two_rel'];
		$header_fullscreen            = $this->props['header_fullscreen'];
		$header_scroll_down           = $this->props['header_scroll_down'];
		$scroll_down_icon             = $this->props['scroll_down_icon'];
		$scroll_down_icon_color       = $this->props['scroll_down_icon_color'];
		$scroll_down_icon_size        = $this->props['scroll_down_icon_size'];
		$scroll_down_icon_size_tablet = $this->props['scroll_down_icon_size_tablet'];
		$scroll_down_icon_size_phone  = $this->props['scroll_down_icon_size_phone'];
		$scroll_down_icon_size_last_edited = $this->props['scroll_down_icon_size_last_edited'];
		$background_image             = $this->props['background_image'];
		$background_overlay_color     = $this->props['background_overlay_color'];
		$parallax                     = $this->props['parallax'];
		$parallax_method              = $this->props['parallax_method'];
		$logo_image_url               = $this->props['logo_image_url'];
		$header_image_url             = $this->props['header_image_url'];
		$content_orientation          = $this->props['content_orientation'];
		$image_orientation            = $this->props['image_orientation'];
		$custom_icon_1                = $this->props['button_one_icon'];
		$button_custom_1              = $this->props['custom_button_one'];
		$custom_icon_2                = $this->props['button_two_icon'];
		$button_custom_2              = $this->props['custom_button_two'];
		$logo_title                   = $this->props['logo_title'];
		$logo_alt_text                = $this->props['logo_alt_text'];
		$image_alt_text               = $this->props['image_alt_text'];
		$image_title                  = $this->props['image_title'];
		$header_level                 = $this->props['title_level'];
		$content_max_width             = $this->props['content_max_width'];
		$content_max_width_tablet      = $this->props['content_max_width_tablet'];
		$content_max_width_phone       = $this->props['content_max_width_phone'];
		$content_max_width_last_edited = $this->props['content_max_width_last_edited'];

		if ( '' !== $scroll_down_icon_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $scroll_down_icon_color )
				),
			) );
		}

		if ( '' !== $scroll_down_icon_size || '' !== $scroll_down_icon_size_tablet || '' !== $scroll_down_icon_size_phone ) {
			$icon_size_responsive_active = et_pb_get_responsive_status( $scroll_down_icon_size_last_edited );

			$icon_size_values = array(
				'desktop' => $scroll_down_icon_size,
				'tablet'  => $icon_size_responsive_active ? $scroll_down_icon_size_tablet : '',
				'phone'   => $icon_size_responsive_active ? $scroll_down_icon_size_phone : '',
			);

			et_pb_generate_responsive_css( $icon_size_values, '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_scroll a .et-pb-icon', 'font-size', $render_slug );
		}

		if ( '' !== $content_max_width_tablet || '' !== $content_max_width_phone || '' !== $content_max_width ) {
			$content_max_width_responsive_active = et_pb_get_responsive_status( $content_max_width_last_edited );

			$content_max_width_values = array(
				'desktop' => $content_max_width,
				'tablet'  => $content_max_width_responsive_active ? $content_max_width_tablet : '',
				'phone'   => $content_max_width_responsive_active ? $content_max_width_phone : '',
			);

			et_pb_generate_responsive_css( $content_max_width_values, '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_container .header-content', 'max-width', $render_slug );
		}

		if ( '' !== $background_overlay_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%%.et_pb_fullwidth_header .et_pb_fullwidth_header_overlay',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $background_overlay_color )
				),
			) );
		}

		$button_output = '';

		$button_output .= $this->render_button( array(
			'button_classname' => array( 'et_pb_more_button', 'et_pb_button_one' ),
			'button_custom'    => $button_custom_1,
			'button_rel'       => $button_one_rel,
			'button_text'      => $button_one_text,
			'button_url'       => $button_one_url,
			'custom_icon'      => $custom_icon_1,
			'has_wrapper'      => false,
		) );

		$button_output .= $this->render_button( array(
			'button_classname' => array( 'et_pb_more_button', 'et_pb_button_two' ),
			'button_custom'    => $button_custom_2,
			'button_rel'       => $button_two_rel,
			'button_text'      => $button_two_text,
			'button_url'       => $button_two_url,
			'custom_icon'      => $custom_icon_2,
			'has_wrapper'      => false,
		) );

		$video_background = $this->video_background();
		$parallax_image_background = $this->get_parallax_image_background();

		// Images: Add CSS Filters and Mix Blend Mode rules (if set)
		$generate_css_image_filters = '';
		if ( array_key_exists( 'image', $this->advanced_fields ) && array_key_exists( 'css', $this->advanced_fields['image'] ) ) {
			$this->add_classname($this->generate_css_filters(
				$render_slug,
				'child_',
				self::$data_utils->array_get( $this->advanced_fields['image']['css'], 'main', '%%order_class%%' )
			));
		}

		$header_content = '';
		if ( '' !== $title || '' !== $subhead || '' !== $content || '' !== $button_output || '' !== $logo_image_url ) {
			$logo_image = '';
			if ( '' !== $logo_image_url ) {
				$logo_image = sprintf(
					'<img src="%1$s" alt="%2$s"%3$s class="header-logo" />',
					esc_url( $logo_image_url ),
					esc_attr( $logo_alt_text ),
					( '' !== $logo_title ? sprintf( ' title="%1$s"', esc_attr( $logo_title ) ) : '' )
				);
			}
			$header_content = sprintf(
				'<div class="header-content-container%6$s">
					<div class="header-content">
						%3$s
						%1$s
						%2$s
						%4$s
						%5$s
					</div>
				</div>',
				( $title ? sprintf( '<%1$s class="et_pb_module_header">%2$s</%1$s>', et_pb_process_header_level( $header_level, 'h1' ), $title ) : '' ),
				( $subhead ? sprintf( '<span class="et_pb_fullwidth_header_subhead">%1$s</span>', $subhead ) : '' ),
				$logo_image,
				sprintf( '<div class="et_pb_header_content_wrapper">%1$s</div>', $this->content ),
				( '' !== $button_output ? $button_output : '' ),
				( '' !== $content_orientation ? sprintf( ' %1$s', $content_orientation ) : '' )
			);
		}

		$header_image = '';

		if ( '' !== $header_image_url ) {
			$header_image = sprintf(
				'<div class="header-image-container%2$s">
					<div class="header-image">
						<img src="%1$s" alt="%4$s" title="%5$s" />
					</div>
				</div>',
				( '' !== $header_image_url ? esc_url( $header_image_url ) : '' ),
				( '' !== $image_orientation ? sprintf( ' %1$s', $image_orientation ) : '' ),
				$generate_css_image_filters,
				esc_attr( $image_alt_text ),
				esc_attr( $image_title )
			);

			$this->add_classname( 'et_pb_header_with_image' );

		}

		$scroll_down_output = '';
		if ( 'off' !== $header_scroll_down || '' !== $scroll_down_icon ) {
			$scroll_down_output .= sprintf(
				'<a href="#"><span class="scroll-down et-pb-icon">%1$s</span></a>',
				esc_html( et_pb_process_font_icon( $scroll_down_icon, 'et_pb_get_font_down_icon_symbols' ) )
			);
		}

		// Module classnames
		$this->add_classname( array(
			"et_pb_bg_layout_{$background_layout}",
			"et_pb_text_align_{$text_orientation}",
		) );

		if ( 'off' !== $header_fullscreen ) {
			$this->add_classname( 'et_pb_fullscreen' );
		}

		$output = sprintf(
			'<section%7$s class="%1$s">
				%6$s
				%8$s
				<div class="et_pb_fullwidth_header_container%5$s">
					%2$s
					%3$s
				</div>
				<div class="et_pb_fullwidth_header_overlay"></div>
				<div class="et_pb_fullwidth_header_scroll">%4$s</div>
			</section>',
			$this->module_classname( $render_slug ),
			( '' !== $header_content ? $header_content : '' ),
			( '' !== $header_image ? $header_image : '' ),
			( 'off' !== $header_scroll_down ? $scroll_down_output : '' ),
			( '' !== $text_orientation ? sprintf( ' %1$s', esc_attr( $text_orientation ) ) : '' ),
			$parallax_image_background,
			$this->module_id(),
			$video_background
		);

		return $output;
	}
}

new ET_Builder_Module_Fullwidth_Header;
