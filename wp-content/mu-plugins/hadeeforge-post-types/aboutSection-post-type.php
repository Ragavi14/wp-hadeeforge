<?php

function setup_about() {
    register_post_type("About Section", [
        "label" => "About Section",
        "labels" => [
            "name" => "About Section",
            "singular_name" => "About Section",
            "add_new_item" => "Add new About Section",
            "edit_item" => "Edit About Section",
            "view_item" => "View About Section",
            "view_items" => "View About Section",
            "search_items" => "Search About Section",
            "not_found" => "No About found",
            "all_items" => "All About Section",
            "archives" => "About Section archives"
        ],
        "description" => "About Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "about_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "about-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_about");

?>