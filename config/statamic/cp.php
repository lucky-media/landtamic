<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Control Panel
    |--------------------------------------------------------------------------
    |
    | Whether the Control Panel should be enabled, and through what route.
    |
    */

    'enabled' => env('CP_ENABLED', true),

    'route' => env('CP_ROUTE', 'cp'),

    /*
    |--------------------------------------------------------------------------
    | Start Page
    |--------------------------------------------------------------------------
    |
    | When a user logs into the Control Panel, they will be taken here.
    | For example: "dashboard", "collections/pages", etc.
    |
    */

    'start_page' => 'dashboard',

    /*
    |--------------------------------------------------------------------------
    | Dashboard Widgets
    |--------------------------------------------------------------------------
    |
    | Here you may define any number of dashboard widgets. You're free to
    | use the same widget multiple times in different configurations.
    |
    */

    'widgets' => [
        // [
        //     'type' => 'collection',
        //     'collection' => 'posts',
        //     'width' => 50,
        //     'limit' => 5,
        // ],
        // [
        //     'type' => 'collection',
        //     'collection' => 'pages',
        //     'width' => 50,
        //     'limit' => 5,
        // ],
        // [
        //     'type' => 'form',
        //     'form' => 'contact_form',
        //     'width' => 100,
        //     'fields' => ['name','email'],
        //     'limit' => 5,
        // ],
        'welcome',
    ],

    /*
    |--------------------------------------------------------------------------
    | Date Format
    |--------------------------------------------------------------------------
    |
    | When a date is encountered throughout the Control Panel, it will be
    | rendered in the following format. Any PHP date variables are permitted.
    |
    */

    'date_format' => 'Y-m-d',

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    | The numbers of items to show on each paginated page.
    |
    */

    'pagination_size' => 50,

    /*
    |--------------------------------------------------------------------------
    | Links to Documentation
    |--------------------------------------------------------------------------
    |
    | Show contextual links to documentation throughout the Control Panel.
    |
    */

    'link_to_docs' => true,

];
