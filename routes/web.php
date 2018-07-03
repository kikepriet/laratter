<?php

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
    $links = [
        'https://www.linkedin.com/in/enrique-prieto-726198137/' => 'Linkedin',
        'https://twitter.com/kikepriet' => 'Twitter',
        'https://www.facebook.com/jesus.enrique.prieto' => 'Facebook' 
    ];
    
    return view('welcome', [
       // 'teacher' => 'Guido Contreras Woda',
        'links' => $links,
    ]);
});

Route::get('/acerca', function () {
    return view('about');
});
