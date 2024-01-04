<?php

function setup_aboutForge() {
    register_post_type("AboutForge Section", [
        "label" => "AboutForge Section",
        "labels" => [
            "name" => "AboutForge Page",
            "singular_name" => "AboutForge Section",
            "add_new_item" => "Add new AboutForge Section",
            "edit_item" => "Edit AboutForge Section",
            "view_item" => "View AboutForge Section",
            "view_items" => "View AboutForge Section",
            "search_items" => "Search AboutForge Section",
            "not_found" => "No AboutForge found",
            "all_items" => "All AboutForge Section",
            "archives" => "AboutForge Section archives"
        ],
        "description" => "AboutForge Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "aboutForge_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "aboutForge-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_aboutForge");

?>