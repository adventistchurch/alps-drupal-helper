<?php

function alps_helper_views_default_views() {
	$views = array();
	$alps_views = array('AlpsCarouselView', 'AlpsStoryView', 'AlpsNewsView');
	foreach ($alps_views as $alps_view) {
		$view = $alps_view::getView();
		$views[$view->name] = $view;
	}
	return $views;
}