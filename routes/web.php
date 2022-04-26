<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $parametri = [
        'menu' => [
        [
            'name' => 'Saluto',
            'link' => '/saluto'
        ],
        [
            'name' => 'About',
            'link' => '/about'
        ]
        ]];
    return view('home', $parametri);
});

Route::get('/about', function () {
    $parametri = [
        'menu' => [
        [
            'name' => 'Home',
            'link' => '/'
        ],
        [
            'name' => 'Saluto',
            'link' => '/saluto'
        ]
        ],
        'testo' => 'E da me che voi, io te posso cantà na canzone!'
    ];
    return view('about', $parametri);
});

Route::get('/saluto', function () {
    $parametri = [
        'menu' => [
        [
            'name' => 'Home',
            'link' => '/'
        ],
        [
            'name' => 'About',
            'link' => '/about'
        ]
        ],
        'testo' => 'Ciao!'
    ];
    return view('saluto', $parametri);
});