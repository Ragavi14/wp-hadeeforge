<?php

function setup_quality() {
    register_post_type("Quality Section", [
        "label" => "Quality Section",
        "labels" => [
            "name" => "Quality Page",
            "singular_name" => "Quality Section",
            "add_new_item" => "Add new Quality Section",
            "edit_item" => "Edit Quality Section",
            "view_item" => "View Quality Section",
            "view_items" => "View Quality Section",
            "search_items" => "Search Quality Section",
            "not_found" => "No Quality found",
            "all_items" => "All Quality Section",
            "archives" => "Quality Section archives"
        ],
        "description" => "Quality Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "quality_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "quality-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_quality");

?>