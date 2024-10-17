<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $menuLinks = [
        [
            'name' => "characters",
            'current' => false,
        ],
        [
            'name' => "comics",
            'current' => true,
        ],
        [
            'name' => "movie",
            'current' => false,
        ],
        [
            'name' => "tv",
            'current' => false,
        ],
        [
            'name' => "games",
            'current' => false,
        ],
        [
            'name' => "collectibles",
            'current' => false,
        ],
        [
            'name' => "videos",
            'current' => false,
        ],
        [
            'name' => "fans",
            'current' => false,
        ],
        [
            'name' => "news",
            'current' => false,
        ],
        [
            'name' => "shop",
            'current' => false,
        ],
    ];

    $comics = config('comics');

    return view('home', compact('menuLinks', 'comics'));
});