<?php

use Illuminate\Support\Facades\Route;

/*
GOAL: basandosi sull'array pagamenti in allegato, creare 2 rotte:
- pagamenti: in cui verranno listati tutti i pagamenti stampati con due colori diversi un colore per riga (come visto a lezione verde/rosso)
- pagamentipending: in cui verranno listati con la stessa grafica precedente i soli pagamenti pending
Note: come sempre generare progetto nuovo con scafolding base (include/yield/extends + css + js); basta lanciare la create-project nella stessa cartella della repo di ieri
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagamenti', 'MainController@pagamenti') -> name ('pagamenti');

Route::get('/pagamentipending', 'MainController@pagamentiPending') -> name ('pagamentipending');
