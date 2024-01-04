<?php

function setup_hero() {
    register_post_type("Hero Section", [
        "label" => "Hero Section",
        "labels" => [
            "name" => "Hero Section",
            "singular_name" => "Hero Section",
            "add_new_item" => "Add new Hero Section",
            "edit_item" => "Edit Hero Section",
            "view_item" => "View Hero Section",
            "view_items" => "View Hero Section",
            "search_items" => "Search Hero Section",
            "not_found" => "No Hero found",
            "all_items" => "All Hero Section",
            "archives" => "Hero Section archives"
        ],
        "description" => "Hero Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "hero_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "hero-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_hero");

?>