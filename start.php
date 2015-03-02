<?php

// register default elgg events
elgg_register_event_handler("init", "system", "bookmarks_tools_init");

function bookmarks_tools_init() {
	elgg_extend_view("css/elgg", "css/bookmarks_tools/site");

	// Register a URL handler for bookmarks
	elgg_register_entity_url_handler('object', 'bookmarks', 'bookmark_tools_url');
}

/**
 * Populates the ->getUrl() method for bookmarked objects
 *
 * @param ElggEntity $entity The bookmarked object
 * @return string bookmarked item URL
 */
function bookmark_tools_url($entity) {
	if (get_plugin_setting("show_comments") == "no") {
		return $entity->address;
	} else {
		$title = $entity->title;
		$title = elgg_get_friendly_title($title);
		return $CONFIG->url . "bookmarks/view/" . $entity->getGUID() . "/" . $title;
	}
}