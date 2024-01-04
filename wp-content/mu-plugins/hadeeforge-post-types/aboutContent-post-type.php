<?php

function setup_aboutContent() {
    register_post_type("AboutContent Section", [
        "label" => "AboutContent Section",
        "labels" => [
            "name" => "AboutContent Section",
            "singular_name" => "AboutContent Section",
            "add_new_item" => "Add new AboutContent Section",
            "edit_item" => "Edit AboutContent Section",
            "view_item" => "View AboutContent Section",
            "view_items" => "View AboutContent Section",
            "search_items" => "Search AboutContent Section",
            "not_found" => "No AboutContent found",
            "all_items" => "All AboutContent Section",
            "archives" => "AboutContent Section archives"
        ],
        "description" => "AboutContent Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "aboutContent_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "aboutContent-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_aboutContent");

?>