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
                "text"  => t("Redov"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisning"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],
            "Typography" => [
                "text"  => t("Typ"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("About typography")
            ],
            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid?vgrid"),
                "title" => t("Grid"),
                "mark-if-parent" => true,
            ],
            "theme" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("theme")
            ],
            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("analys")
            ],
            "blogg" => [
                "text"  => t("blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("blogg")
            ],
            "images" => [
                "text"  => t("images"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("images")
            ],
            "designE" => [
                "text"  => t("designE"),
                "url"   => $this->di->get("url")->create("design-element"),
                "title" => t("designE")
            ],
            "designP" => [
                "text"  => t("designP"),
                "url"   => $this->di->get("url")->create("design-principle"),
                "title" => t("designP")
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
            "theme" => [
                "text"  => t("theme"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("theme")
            ],
            "analysis" => [
                "text"  => t("Analys"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("analys")
            ],
            "themeSel" => [
                "text"  => t("Theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("analys")
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
