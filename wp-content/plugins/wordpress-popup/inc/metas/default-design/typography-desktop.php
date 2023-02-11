<?php
/**
 * Defines the default values for the "Typography" properties in desktop.
 *
 * @since 4.3.0
 * @package Hustle
 */

return array(
	'title_font_family'                                 => $is_optin ? 'Open Sans' : 'custom',
	'title_custom_font_family'                          => $is_optin ? 'inherit' : 'Georgia,Times,serif',
	'title_font_size'                                   => $is_optin ? 20 : 33,
	'title_font_size_unit'                              => 'px',
	'title_font_weight'                                 => $is_optin ? 700 : 400,
	'title_alignment'                                   => 'left',
	'title_line_height'                                 => $is_optin ? 27 : 38,
	'title_line_height_unit'                            => 'px',
	'title_letter_spacing'                              => 0,
	'title_letter_spacing_unit'                         => 'px',
	'title_text_transform'                              => 'none',
	'title_text_decoration'                             => 'none',

	'subtitle_font_family'                              => 'Open Sans',
	'subtitle_custom_font_family'                       => 'inherit',
	'subtitle_font_size'                                => 14,
	'subtitle_font_size_unit'                           => 'px',
	'subtitle_font_weight'                              => 700,
	'subtitle_alignment'                                => 'left',
	'subtitle_line_height'                              => $is_optin ? 18 : 24,
	'subtitle_line_height_unit'                         => 'px',
	'subtitle_letter_spacing'                           => 0,
	'subtitle_letter_spacing_unit'                      => 'px',
	'subtitle_text_transform'                           => 'none',
	'subtitle_text_decoration'                          => 'none',

	'main_content_paragraph_font_family'                => 'Open Sans',
	'main_content_paragraph_custom_font_family'         => 'inherit',
	'main_content_paragraph_font_size'                  => 14,
	'main_content_paragraph_font_size_unit'             => 'px',
	'main_content_paragraph_font_weight'                => 'regular',
	'main_content_paragraph_alignment'                  => 'left',
	'main_content_paragraph_line_height'                => 1.45,
	'main_content_paragraph_line_height_unit'           => 'em',
	'main_content_paragraph_letter_spacing'             => 0,
	'main_content_paragraph_letter_spacing_unit'        => 'px',
	'main_content_paragraph_text_transform'             => 'none',
	'main_content_paragraph_text_decoration'            => 'none',

	'main_content_heading_one_font_family'              => 'Open Sans',
	'main_content_heading_one_custom_font_family'       => 'inherit',
	'main_content_heading_one_font_size'                => 28,
	'main_content_heading_one_font_size_unit'           => 'px',
	'main_content_heading_one_font_weight'              => 700,
	'main_content_heading_one_alignment'                => 'left',
	'main_content_heading_one_line_height'              => 1.4,
	'main_content_heading_one_line_height_unit'         => 'em',
	'main_content_heading_one_letter_spacing'           => 0,
	'main_content_heading_one_letter_spacing_unit'      => 'px',
	'main_content_heading_one_text_transform'           => 'none',
	'main_content_heading_one_text_decoration'          => 'none',

	'main_content_heading_two_font_family'              => 'custom',
	'main_content_heading_two_custom_font_family'       => 'inherit',
	'main_content_heading_two_font_size'                => 22,
	'main_content_heading_two_font_size_unit'           => 'px',
	'main_content_heading_two_font_weight'              => 700,
	'main_content_heading_two_alignment'                => 'left',
	'main_content_heading_two_line_height'              => 1.4,
	'main_content_heading_two_line_height_unit'         => 'em',
	'main_content_heading_two_letter_spacing'           => 0,
	'main_content_heading_two_letter_spacing_unit'      => 'px',
	'main_content_heading_two_text_transform'           => 'none',
	'main_content_heading_two_text_decoration'          => 'none',

	'main_content_heading_three_font_family'            => 'Open Sans',
	'main_content_heading_three_custom_font_family'     => 'inherit',
	'main_content_heading_three_font_size'              => 18,
	'main_content_heading_three_font_size_unit'         => 'px',
	'main_content_heading_three_font_weight'            => 700,
	'main_content_heading_three_alignment'              => 'left',
	'main_content_heading_three_line_height'            => 1.4,
	'main_content_heading_three_line_height_unit'       => 'em',
	'main_content_heading_three_letter_spacing'         => 0,
	'main_content_heading_three_letter_spacing_unit'    => 'px',
	'main_content_heading_three_text_transform'         => 'none',
	'main_content_heading_three_text_decoration'        => 'none',

	'main_content_heading_four_font_family'             => 'Open Sans',
	'main_content_heading_four_custom_font_family'      => 'inherit',
	'main_content_heading_four_font_size'               => 16,
	'main_content_heading_four_font_size_unit'          => 'px',
	'main_content_heading_four_font_weight'             => 700,
	'main_content_heading_four_alignment'               => 'left',
	'main_content_heading_four_line_height'             => 1.4,
	'main_content_heading_four_line_height_unit'        => 'em',
	'main_content_heading_four_letter_spacing'          => 0,
	'main_content_heading_four_letter_spacing_unit'     => 'px',
	'main_content_heading_four_text_transform'          => 'none',
	'main_content_heading_four_text_decoration'         => 'none',

	'main_content_heading_five_font_family'             => 'Open Sans',
	'main_content_heading_five_custom_font_family'      => 'inherit',
	'main_content_heading_five_font_size'               => 14,
	'main_content_heading_five_font_size_unit'          => 'px',
	'main_content_heading_five_font_weight'             => 700,
	'main_content_heading_five_alignment'               => 'left',
	'main_content_heading_five_line_height'             => 1.4,
	'main_content_heading_five_line_height_unit'        => 'em',
	'main_content_heading_five_letter_spacing'          => 0,
	'main_content_heading_five_letter_spacing_unit'     => 'px',
	'main_content_heading_five_text_transform'          => 'none',
	'main_content_heading_five_text_decoration'         => 'none',

	'main_content_heading_six_font_family'              => 'Open Sans',
	'main_content_heading_six_custom_font_family'       => 'inherit',
	'main_content_heading_six_font_size'                => 12,
	'main_content_heading_six_font_size_unit'           => 'px',
	'main_content_heading_six_font_weight'              => 700,
	'main_content_heading_six_alignment'                => 'left',
	'main_content_heading_six_line_height'              => 1.4,
	'main_content_heading_six_line_height_unit'         => 'em',
	'main_content_heading_six_letter_spacing'           => 0,
	'main_content_heading_six_letter_spacing_unit'      => 'px',
	'main_content_heading_six_text_transform'           => 'uppercase',
	'main_content_heading_six_text_decoration'          => 'none',

	'main_content_lists_font_family'                    => 'Open Sans',
	'main_content_lists_custom_font_family'             => 'inherit',
	'main_content_lists_font_size'                      => 14,
	'main_content_lists_font_size_unit'                 => 'px',
	'main_content_lists_font_weight'                    => 'regular',
	'main_content_lists_alignment'                      => 'left',
	'main_content_lists_line_height'                    => 1.45,
	'main_content_lists_line_height_unit'               => 'em',
	'main_content_lists_letter_spacing'                 => 0,
	'main_content_lists_letter_spacing_unit'            => 'px',
	'main_content_lists_text_transform'                 => 'none',
	'main_content_lists_text_decoration'                => 'none',

	'cta_font_family'                                   => 'Open Sans',
	'cta_custom_font_family'                            => 'inherit',
	'cta_font_size'                                     => 13,
	'cta_font_size_unit'                                => 'px',
	'cta_font_weight'                                   => 'bold',
	'cta_alignment'                                     => 'center',
	'cta_line_height'                                   => 32,
	'cta_line_height_unit'                              => 'px',
	'cta_letter_spacing'                                => 0.5,
	'cta_letter_spacing_unit'                           => 'px',
	'cta_text_transform'                                => 'none',
	'cta_text_decoration'                               => 'none',

	'never_see_link_font_family'                        => 'Open Sans',
	'never_see_link_custom_font_family'                 => 'inherit',
	'never_see_link_font_size'                          => 14,
	'never_see_link_font_size_unit'                     => 'px',
	'never_see_link_font_weight'                        => 'regular',
	'never_see_link_alignment'                          => 'center',
	'never_see_link_line_height'                        => 20,
	'never_see_link_line_height_unit'                   => 'px',
	'never_see_link_letter_spacing'                     => 0,
	'never_see_link_letter_spacing_unit'                => 'px',
	'never_see_link_text_transform'                     => 'none',
	'never_see_link_text_decoration'                    => 'none',

	'form_extras_font_family'                           => 'Open Sans',
	'form_extras_custom_font_family'                    => 'inherit',
	'form_extras_font_size'                             => 13,
	'form_extras_font_size_unit'                        => 'px',
	'form_extras_font_weight'                           => 'bold',
	'form_extras_alignment'                             => 'left',
	'form_extras_line_height'                           => 22,
	'form_extras_line_height_unit'                      => 'px',
	'form_extras_letter_spacing'                        => 0,
	'form_extras_letter_spacing_unit'                   => 'px',
	'form_extras_text_transform'                        => 'none',
	'form_extras_text_decoration'                       => 'none',

	'input_font_family'                                 => 'Open Sans',
	'input_custom_font_family'                          => 'inherit',
	'input_font_size'                                   => 13,
	'input_font_size_unit'                              => 'px',
	'input_font_weight'                                 => 'regular',
	'input_alignment'                                   => 'left',
	'input_line_height'                                 => 18,
	'input_line_height_unit'                            => 'px',
	'input_letter_spacing'                              => 0,
	'input_letter_spacing_unit'                         => 'px',
	'input_text_transform'                              => 'none',
	'input_text_decoration'                             => 'none',

	'select_font_family'                                => 'Open Sans',
	'select_custom_font_family'                         => 'inherit',
	'select_font_size'                                  => 13,
	'select_font_size_unit'                             => 'px',
	'select_font_weight'                                => 'regular',
	'select_alignment'                                  => 'left',
	'select_line_height'                                => 18,
	'select_line_height_unit'                           => 'px',
	'select_letter_spacing'                             => 0,
	'select_letter_spacing_unit'                        => 'px',
	'select_text_transform'                             => 'none',
	'select_text_decoration'                            => '',

	'checkbox_font_family'                              => 'Open Sans',
	'checkbox_custom_font_family'                       => 'inherit',
	'checkbox_font_size'                                => 12,
	'checkbox_font_size_unit'                           => 'px',
	'checkbox_font_weight'                              => 'regular',
	'checkbox_alignment'                                => 'left',
	'checkbox_line_height'                              => 20,
	'checkbox_line_height_unit'                         => 'px',
	'checkbox_letter_spacing'                           => 0,
	'checkbox_letter_spacing_unit'                      => 'px',
	'checkbox_text_transform'                           => 'none',
	'checkbox_text_decoration'                          => 'none',

	'dropdown_font_family'                              => 'Open Sans',
	'dropdown_custom_font_family'                       => 'inherit',
	'dropdown_font_size'                                => 13,
	'dropdown_font_size_unit'                           => 'px',
	'dropdown_font_weight'                              => 'regular',
	'dropdown_alignment'                                => 'left',
	'dropdown_line_height'                              => 18,
	'dropdown_line_height_unit'                         => 'px',
	'dropdown_letter_spacing'                           => 0,
	'dropdown_letter_spacing_unit'                      => 'px',
	'dropdown_text_transform'                           => 'none',
	'dropdown_text_decoration'                          => 'none',

	'gdpr_font_family'                                  => 'Open Sans',
	'gdpr_custom_font_family'                           => 'inherit',
	'gdpr_font_size'                                    => 12,
	'gdpr_font_size_unit'                               => 'px',
	'gdpr_font_weight'                                  => 'regular',
	'gdpr_alignment'                                    => 'left',
	'gdpr_line_height'                                  => 1.7,
	'gdpr_line_height_unit'                             => 'em',
	'gdpr_letter_spacing'                               => 0,
	'gdpr_letter_spacing_unit'                          => 'px',
	'gdpr_text_transform'                               => 'none',
	'gdpr_text_decoration'                              => 'none',

	'recaptcha_font_family'                             => 'custom',
	'recaptcha_custom_font_family'                      => 'inherit',
	'recaptcha_font_size'                               => 12,
	'recaptcha_font_size_unit'                          => 'px',
	'recaptcha_font_weight'                             => 'regular',
	'recaptcha_alignment'                               => 'left',
	'recaptcha_line_height'                             => 1.7,
	'recaptcha_line_height_unit'                        => 'em',
	'recaptcha_letter_spacing'                          => -0.25,
	'recaptcha_letter_spacing_unit'                     => 'px',
	'recaptcha_text_transform'                          => 'none',
	'recaptcha_text_decoration'                         => 'none',

	'submit_button_font_family'                         => 'Open Sans',
	'submit_button_custom_font_family'                  => 'inherit',
	'submit_button_font_size'                           => 13,
	'submit_button_font_size_unit'                      => 'px',
	'submit_button_font_weight'                         => 'bold',
	'submit_button_line_height'                         => 32,
	'submit_button_line_height_unit'                    => 'px',
	'submit_button_letter_spacing'                      => 0.5,
	'submit_button_letter_spacing_unit'                 => 'px',
	'submit_button_text_transform'                      => 'none',
	'submit_button_text_decoration'                     => 'none',

	'success_message_paragraph_font_family'             => 'Open Sans',
	'success_message_paragraph_custom_font_family'      => 'inherit',
	'success_message_paragraph_font_size'               => 14,
	'success_message_paragraph_font_size_unit'          => 'px',
	'success_message_paragraph_font_weight'             => 'regular',
	'success_message_paragraph_alignment'               => 'left',
	'success_message_paragraph_line_height'             => 1.45,
	'success_message_paragraph_line_height_unit'        => 'em',
	'success_message_paragraph_letter_spacing'          => 0,
	'success_message_paragraph_letter_spacing_unit'     => 'px',
	'success_message_paragraph_text_transform'          => 'none',
	'success_message_paragraph_text_decoration'         => 'none',

	'success_message_heading_one_font_family'           => 'Open Sans',
	'success_message_heading_one_custom_font_family'    => 'inherit',
	'success_message_heading_one_font_size'             => 28,
	'success_message_heading_one_font_size_unit'        => 'px',
	'success_message_heading_one_font_weight'           => 700,
	'success_message_heading_one_alignment'             => 'left',
	'success_message_heading_one_line_height'           => 1.4,
	'success_message_heading_one_line_height_unit'      => 'em',
	'success_message_heading_one_letter_spacing'        => 0,
	'success_message_heading_one_letter_spacing_unit'   => 'px',
	'success_message_heading_one_text_transform'        => 'none',
	'success_message_heading_one_text_decoration'       => 'none',

	'success_message_heading_two_font_family'           => 'Open Sans',
	'success_message_heading_two_custom_font_family'    => 'inherit',
	'success_message_heading_two_font_size'             => 22,
	'success_message_heading_two_font_size_unit'        => 'px',
	'success_message_heading_two_font_weight'           => 700,
	'success_message_heading_two_alignment'             => 'left',
	'success_message_heading_two_line_height'           => 1.4,
	'success_message_heading_two_line_height_unit'      => 'em',
	'success_message_heading_two_letter_spacing'        => 0,
	'success_message_heading_two_letter_spacing_unit'   => 'px',
	'success_message_heading_two_text_transform'        => 'none',
	'success_message_heading_two_text_decoration'       => 'none',

	'success_message_heading_three_font_family'         => 'Open Sans',
	'success_message_heading_three_custom_font_family'  => 'inherit',
	'success_message_heading_three_font_size'           => 18,
	'success_message_heading_three_font_size_unit'      => 'px',
	'success_message_heading_three_font_weight'         => 700,
	'success_message_heading_three_alignment'           => 'left',
	'success_message_heading_three_line_height'         => 1.4,
	'success_message_heading_three_line_height_unit'    => 'em',
	'success_message_heading_three_letter_spacing'      => 0,
	'success_message_heading_three_letter_spacing_unit' => 'px',
	'success_message_heading_three_text_transform'      => 'none',
	'success_message_heading_three_text_decoration'     => 'none',

	'success_message_heading_four_font_family'          => 'Open Sans',
	'success_message_heading_four_custom_font_family'   => 'inherit',
	'success_message_heading_four_font_size'            => 16,
	'success_message_heading_four_font_size_unit'       => 'px',
	'success_message_heading_four_font_weight'          => 700,
	'success_message_heading_four_alignment'            => 'left',
	'success_message_heading_four_line_height'          => 1.4,
	'success_message_heading_four_line_height_unit'     => 'em',
	'success_message_heading_four_letter_spacing'       => 0,
	'success_message_heading_four_letter_spacing_unit'  => 'px',
	'success_message_heading_four_text_transform'       => 'none',
	'success_message_heading_four_text_decoration'      => 'none',

	'success_message_heading_five_font_family'          => 'Open Sans',
	'success_message_heading_five_custom_font_family'   => 'inherit',
	'success_message_heading_five_font_size'            => 14,
	'success_message_heading_five_font_size_unit'       => 'px',
	'success_message_heading_five_font_weight'          => 700,
	'success_message_heading_five_alignment'            => 'left',
	'success_message_heading_five_line_height'          => 1.4,
	'success_message_heading_five_line_height_unit'     => 'em',
	'success_message_heading_five_letter_spacing'       => 0,
	'success_message_heading_five_letter_spacing_unit'  => 'px',
	'success_message_heading_five_text_transform'       => 'none',
	'success_message_heading_five_text_decoration'      => 'none',

	'success_message_heading_six_font_family'           => 'Open Sans',
	'success_message_heading_six_custom_font_family'    => 'inherit',
	'success_message_heading_six_font_size'             => 12,
	'success_message_heading_six_font_size_unit'        => 'px',
	'success_message_heading_six_font_weight'           => 700,
	'success_message_heading_six_alignment'             => 'left',
	'success_message_heading_six_line_height'           => 1.4,
	'success_message_heading_six_line_height_unit'      => 'em',
	'success_message_heading_six_letter_spacing'        => 0,
	'success_message_heading_six_letter_spacing_unit'   => 'px',
	'success_message_heading_six_text_transform'        => 'uppercase',
	'success_message_heading_six_text_decoration'       => 'none',

	'success_message_lists_font_family'                 => 'Open Sans',
	'success_message_lists_custom_font_family'          => 'inherit',
	'success_message_lists_font_size'                   => 14,
	'success_message_lists_font_size_unit'              => 'px',
	'success_message_lists_font_weight'                 => 'regular',
	'success_message_lists_alignment'                   => 'left',
	'success_message_lists_line_height'                 => 1.45,
	'success_message_lists_line_height_unit'            => 'em',
	'success_message_lists_letter_spacing'              => 0,
	'success_message_lists_letter_spacing_unit'         => 'px',
	'success_message_lists_text_transform'              => 'none',
	'success_message_lists_text_decoration'             => 'none',

	'error_message_font_family'                         => 'Open Sans',
	'error_message_custom_font_family'                  => 'inherit',
	'error_message_font_size'                           => 12,
	'error_message_font_size_unit'                      => 'px',
	'error_message_font_weight'                         => 'regular',
	'error_message_alignment'                           => 'left',
	'error_message_line_height'                         => 20,
	'error_message_line_height_unit'                    => 'px',
	'error_message_letter_spacing'                      => 0,
	'error_message_letter_spacing_unit'                 => 'px',
	'error_message_text_transform'                      => 'none',
	'error_message_text_decoration'                     => 'none',
);
