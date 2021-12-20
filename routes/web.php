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




// Home
Route::get("/home", function () {
  $data = [
    'nome' => 'Studente',
    'cognome' => 'Boolean',
    'lista_studenti' => [
      'Mario Rossi',
      'Luigi Verdi',
      'Silvia Neri',
      'Antonio Bianchi'
    ]
  ];
  return view("home", $data);
})->name("home");




// Chi siamo
Route::get("/chi-siamo", function () {
  return view("chi_siamo");
})->name("chiSiamo");

// Contatti
Route::get("/contatti", function () {
  return view("contatti");
})->name("contatti");

// Shop
Route::get("/shop", function () {
  return view("shop");
})->name("shop");

// FAQ
Route::get("/faq", function () {
  return view("faq");
})->name("faq");