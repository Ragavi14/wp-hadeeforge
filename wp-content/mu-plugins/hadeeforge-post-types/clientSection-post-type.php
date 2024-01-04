<?php

function setup_client() {
    register_post_type("Client Section", [
        "label" => "Client Section",
        "labels" => [
            "name" => "Client Section",
            "singular_name" => "Client Section",
            "add_new_item" => "Add new Client Section",
            "edit_item" => "Edit Client Section",
            "view_item" => "View Client Section",
            "view_items" => "View Client Section",
            "search_items" => "Search Client Section",
            "not_found" => "No Client found",
            "all_items" => "All Client Section",
            "archives" => "Client Section archives"
        ],
        "description" => "Client Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "client_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "client-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_client");

?>