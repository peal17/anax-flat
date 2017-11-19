<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [
            // "index" => [
            //     "text"  => t("Hem"),
            //     "url"   => $this->di->get("url")->create("index"),
            //     "title" => t("Petter")
            // ],
            "report" => [
                "text"  => t("Redovisningar"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om sidan"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            "Typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("About typography")
            ],
            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("Grid"),
                "mark-if-parent" => true,
            ],

        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [
            "index" => [
                "text"  => t("Hem"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Petter")
            ],
            "report" => [
                "text"  => t("Redovisningar"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om sidan"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            "Typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("About typography")
            ],
            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("Grid"),
                "mark-if-parent" => true,
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
