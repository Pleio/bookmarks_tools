<?php

// register default elgg events
elgg_register_event_handler("init", "system", "bookmarks_tools_init");

function bookmarks_tools_init() {
	elgg_extend_view("css/elgg", "css/bookmarks_tools/site");
}
