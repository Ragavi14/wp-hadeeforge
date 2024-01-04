<?php

function setup_certificate() {
    register_post_type("Certificate Section", [
        "label" => "Certificate Section",
        "labels" => [
            "name" => "Certificate Section",
            "singular_name" => "Certificate Section",
            "add_new_item" => "Add new Certificate Section",
            "edit_item" => "Edit Certificate Section",
            "view_item" => "View Certificate Section",
            "view_items" => "View Certificate Section",
            "search_items" => "Search Certificate Section",
            "not_found" => "No Certificate found",
            "all_items" => "All Certificate Section",
            "archives" => "Certificate Section archives"
        ],
        "description" => "Certificate Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "certificate_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "certificate-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_certificate");

?>