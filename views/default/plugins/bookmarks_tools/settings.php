<?php

$plugin = $vars["entity"];

$yesno_options = array(
	"yes" => elgg_echo("option:yes"),
	"no" => elgg_echo("option:no")
);

$link_behaviour = $plugin->link_behaviour;
if (empty($link_behaviour)) {
	$link_behaviour = "default";
}

$settings_link_behaviour .= "<div>";
$settings_link_behaviour .= elgg_echo("bookmarks_tools:settings:link_behaviour:description");
$settings_link_behaviour .= elgg_view("input/radio", array("name" => "params[link_behaviour]", "value" => $link_behaviour, "class" => "mtm", "options" => array(
		elgg_echo("bookmarks_tools:settings:link_behaviour:options:default") => "default",
		elgg_echo("bookmarks_tools:settings:link_behaviour:options:blank_external") => "blank_external",
		elgg_echo("bookmarks_tools:settings:link_behaviour:options:blank_icon") => "blank_icon"
)));
$settings_link_behaviour .= "</div>";
$settings_link_behaviour .= "<p></p>";
$settings_link_behaviour .= "<div>";
$settings_link_behaviour .= elgg_echo("bookmarks_tools:settings:link_behaviour:comments");
$settings_link_behaviour .= elgg_view("input/dropdown", array("name" => "params[show_comments]", "value" => $plugin->show_comments, "options_values" => $yesno_options));
$settings_link_behaviour .= "</div>";


echo elgg_view_module("inline", elgg_echo("bookmarks_tools:settings:link_behaviour:title"), $settings_link_behaviour);