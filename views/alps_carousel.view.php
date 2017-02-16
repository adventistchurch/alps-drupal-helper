<?php

class AlpsCarouselView {
	public static function getView() {
		$view = new view();
		$view->name = 'carousel';
		$view->description = '';
		$view->tag = 'alps_carousel';
		$view->base_table = 'node';
		$view->human_name = 'Carousel';
		$view->core = 7;
		$view->api_version = '3.0';
		$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

		/* Display: Master */
		$handler = $view->new_display('default', 'Master', 'default');
		$handler->display->display_options['use_more_always'] = FALSE;
		$handler->display->display_options['access']['type'] = 'perm';
		$handler->display->display_options['cache']['type'] = 'none';
		$handler->display->display_options['query']['type'] = 'views_query';
		$handler->display->display_options['exposed_form']['type'] = 'basic';
		$handler->display->display_options['pager']['type'] = 'some';
		$handler->display->display_options['pager']['options']['items_per_page'] = '5';
		$handler->display->display_options['style_plugin'] = 'default';
		$handler->display->display_options['row_plugin'] = 'fields';
		/* Field: Content: Title */
		$handler->display->display_options['fields']['title']['id'] = 'title';
		$handler->display->display_options['fields']['title']['table'] = 'node';
		$handler->display->display_options['fields']['title']['field'] = 'title';
		$handler->display->display_options['fields']['title']['label'] = '';
		$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
		$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
		/* Field: Content: Sub Title */
		$handler->display->display_options['fields']['field_sub_title']['id'] = 'field_sub_title';
		$handler->display->display_options['fields']['field_sub_title']['table'] = 'field_data_field_sub_title';
		$handler->display->display_options['fields']['field_sub_title']['field'] = 'field_sub_title';
		$handler->display->display_options['fields']['field_sub_title']['label'] = '';
		$handler->display->display_options['fields']['field_sub_title']['element_label_colon'] = FALSE;
		/* Field: Content: Header Image */
		$handler->display->display_options['fields']['field_header_image']['id'] = 'field_header_image';
		$handler->display->display_options['fields']['field_header_image']['table'] = 'field_data_field_header_image';
		$handler->display->display_options['fields']['field_header_image']['field'] = 'field_header_image';
		$handler->display->display_options['fields']['field_header_image']['label'] = '';
		$handler->display->display_options['fields']['field_header_image']['element_label_colon'] = FALSE;
		$handler->display->display_options['fields']['field_header_image']['click_sort_column'] = 'fid';
		$handler->display->display_options['fields']['field_header_image']['settings'] = array(
		  'image_style' => '',
		  'image_link' => '',
		);
		/* Sort criterion: Content: Post date */
		$handler->display->display_options['sorts']['created']['id'] = 'created';
		$handler->display->display_options['sorts']['created']['table'] = 'node';
		$handler->display->display_options['sorts']['created']['field'] = 'created';
		/* Filter criterion: Content: Published */
		$handler->display->display_options['filters']['status']['id'] = 'status';
		$handler->display->display_options['filters']['status']['table'] = 'node';
		$handler->display->display_options['filters']['status']['field'] = 'status';
		$handler->display->display_options['filters']['status']['value'] = 1;
		$handler->display->display_options['filters']['status']['group'] = 1;
		$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

		/* Display: Block */
		$handler = $view->new_display('block', 'Block', 'block');
		$handler->display->display_options['defaults']['fields'] = FALSE;
		/* Field: Content: Title */
		$handler->display->display_options['fields']['title']['id'] = 'title';
		$handler->display->display_options['fields']['title']['table'] = 'node';
		$handler->display->display_options['fields']['title']['field'] = 'title';
		$handler->display->display_options['fields']['title']['label'] = '';
		$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
		$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
		/* Field: Content: Sub Title */
		$handler->display->display_options['fields']['field_sub_title']['id'] = 'field_sub_title';
		$handler->display->display_options['fields']['field_sub_title']['table'] = 'field_data_field_sub_title';
		$handler->display->display_options['fields']['field_sub_title']['field'] = 'field_sub_title';
		$handler->display->display_options['fields']['field_sub_title']['label'] = '';
		$handler->display->display_options['fields']['field_sub_title']['element_label_colon'] = FALSE;
		/* Field: Content: Header Image */
		$handler->display->display_options['fields']['field_header_image']['id'] = 'field_header_image';
		$handler->display->display_options['fields']['field_header_image']['table'] = 'field_data_field_header_image';
		$handler->display->display_options['fields']['field_header_image']['field'] = 'field_header_image';
		$handler->display->display_options['fields']['field_header_image']['label'] = '';
		$handler->display->display_options['fields']['field_header_image']['element_label_colon'] = FALSE;
		$handler->display->display_options['fields']['field_header_image']['click_sort_column'] = 'fid';
		$handler->display->display_options['fields']['field_header_image']['settings'] = array(
		  'image_style' => '',
		  'image_link' => '',
		);
		/* Field: Content: Link */
		$handler->display->display_options['fields']['view_node']['id'] = 'view_node';
		$handler->display->display_options['fields']['view_node']['table'] = 'views_entity_node';
		$handler->display->display_options['fields']['view_node']['field'] = 'view_node';
		$handler->display->display_options['fields']['view_node']['text'] = 'Find out more';
		$handler->display->display_options['block_description'] = 'Carousel';
		return $view;
	}
}