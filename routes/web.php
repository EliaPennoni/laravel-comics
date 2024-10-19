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
    $cardLinks = [
        [
            'name' => 'dc-card',
            'path' => 'resources/img/img/buy-comics-digital-comics.png',
        ],
        [
            'name' => 'dc-tshirt',
            'path' => 'resources/img/img/buy-comics-merchandise.png',
        ],
        [
            'name' => 'dc-locations',
            'path' => 'resources/img/img/buy-comics-shop-locator.png',
        ],
        [
            'name' => 'dc-subscription',
            'path' => 'resources/img/img/buy-comics-subscriptions.png',
        ],
    ];
    $dcs = [
        [
            'label' => "Term of use",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Privacy policy",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Add choices",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Advertising",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Jobs",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Subscriptions",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Talents",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Ratings",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Shop",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Contact us",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "News",
            'link' => "#",
            'active' => "false",
        ],
    ];
    $shops = [
        [
            'label' => "Shop DC",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Contact Us",
            'link' => "#",
            'active' => "false",
        ],
    ];
    $sites = [
        [
            'label' => "Talents",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Ratings",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Shop",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "Contact us",
            'link' => "#",
            'active' => "false",
        ],
        [
            'label' => "News",
            'link' => "#",
            'active' => "false",
        ],
    ];

    $comics = config('comics');

    return view('home', compact('menuLinks', 'comics', 'cardLinks', 'dcs', 'shops', 'sites'));
});