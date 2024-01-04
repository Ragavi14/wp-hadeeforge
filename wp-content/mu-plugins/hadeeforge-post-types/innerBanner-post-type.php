<?php

function setup_innerBanner() {
    register_post_type("InnerBanner Section", [
        "label" => "InnerBanner Section",
        "labels" => [
            "name" => "InnerBanner Section",
            "singular_name" => "InnerBanner Section",
            "add_new_item" => "Add new InnerBanner Section",
            "edit_item" => "Edit InnerBanner Section",
            "view_item" => "View InnerBanner Section",
            "view_items" => "View InnerBanner Section",
            "search_items" => "Search InnerBanner Section",
            "not_found" => "No InnerBanner found",
            "all_items" => "All InnerBanner Section",
            "archives" => "InnerBanner Section archives"
        ],
        "description" => "InnerBanner Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "innerBanner_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "innerBanner-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_innerBanner");

?>