<?php

declare(strict_types = 1);

/*
 * These page titles are dynamically loaded in PageTitles middleware.
 * They are mapped to route names.
 *
 * To add new title just add an entry to the array
 * with key being the route name and the value being the title.
 *
 * To add dynamic variables to the titles:
 * 1. Add them as numbers in ascending order starting form zero after a ':' symbol in the title text.
 * 2. Pass an array called 'page_attributes' with the ordered variables
 *    from the controller to the view that should have them in its title.
 */

return [
    'index' => env('APP_NAME', 'Home Page'),
    'home' => env('APP_NAME', 'Home Page'),
];
