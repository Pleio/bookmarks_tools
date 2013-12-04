<?php

$plugin = $vars["entity"];

$settings_link_behaviour = elgg_echo("bookmarks_tools:settings:link_behaviour:description");

$link_behaviour = $plugin->link_behaviour;
if (empty($link_behaviour)) {
	$link_behaviour = "default";
}

$settings_link_behaviour .= elgg_view("input/radio", array("name" => "params[link_behaviour]", "value" => $link_behaviour, "class" => "mtm", "options" => array(
		elgg_echo("bookmarks_tools:settings:link_behaviour:options:default") => "default",
		elgg_echo("bookmarks_tools:settings:link_behaviour:options:blank_external") => "blank_external",
		elgg_echo("bookmarks_tools:settings:link_behaviour:options:blank_icon") => "blank_icon"
	)));

echo elgg_view_module("inline", elgg_echo("bookmarks_tools:settings:link_behaviour:title"), $settings_link_behaviour);