<?php

function setup_service() {
    register_post_type("Service Section", [
        "label" => "Service Section",
        "labels" => [
            "name" => "Service Section",
            "singular_name" => "Service Section",
            "add_new_item" => "Add new Service Section",
            "edit_item" => "Edit Service Section",
            "view_item" => "View Service Section",
            "view_items" => "View Service Section",
            "search_items" => "Search Service Section",
            "not_found" => "No Service found",
            "all_items" => "All Service Section",
            "archives" => "Service Section archives"
        ],
        "description" => "Service Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "service_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "service-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_service");

?>