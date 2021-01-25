<?php

use Illuminate\Support\Facades\Route;

/*

GOAL: sulla falsa riga della struttura vista a lezione (components, layouts, pages) generare 3 rotte separate:
- home
- blog
- about
La struttura generale (header, footer, ecc) resta invariata per ogni pagina, cambia solo il contenuto che riportera' il solo titolo della pagina.
Es:
Home:
header-comune
<h1>HOME</h1>
footer-comune

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'MainController@home') -> name ('home');

Route::get('/blog', 'MainController@blog') -> name ('blog');

Route::get('/about', 'MainController@about') -> name ('about');
