<?php

function setup_CareersPage() {
    register_post_type("CareersPage Section", [
        "label" => "CareersPage Section",
        "labels" => [
            "name" => "Careers Page",
            "singular_name" => "CareersPage Section",
            "add_new_item" => "Add new CareersPage Section",
            "edit_item" => "Edit CareersPage Section",
            "view_item" => "View CareersPage Section",
            "view_items" => "View CareersPage Section",
            "search_items" => "Search CareersPage Section",
            "not_found" => "No CareersPage found",
            "all_items" => "All CareersPage Section",
            "archives" => "CareersPage Section archives"
        ],
        "description" => "CareersPage Section provided by Netiapps",
        "public" => true,
        'has_archive' => true,
        "show_in_rest" => true,
        "CareersPage_icon" => "dashicons-twitch",
        "rewrite" => [
            "slug" => "CareersPage-section"
        ],
        "supports" => [
            "title", "editor", "revisions", "author", "excerpt", "page_attributes","thumbnail"
        ]
       

    ]);

   
}

add_action("init", "setup_CareersPage");

?>