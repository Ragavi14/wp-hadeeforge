<?php

function setup_sector() {
    register_post_type("Sector Section", [
        "label" => "Sector Section",
        "labels" => [
            "name" => "Sector Section",
            "singular_name" => "Sector Section",
            "add_new_item" => "Add new Sector Section",
            "edit_item" => "Edit Sector Section",
            "view_item" => "View Sector Section",
            "view_items" => "View Sector Section",
            "search_items" => "Search Sector Section",
            "not_found" => "No Sector found",
            "all_items" => "All Sector Section",
            "archives" => "Sector Section archives"
        ],
        "description" => "Sector Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "sector_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "sector-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_sector");

?>