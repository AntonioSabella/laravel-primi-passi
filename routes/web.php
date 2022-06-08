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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/home', function () {
    $name = 'Antonio';
    $surname = 'Sabella';
    $role = 'Boolean Student';
    $passions = 'Writing';
    $informations = [
        'name' => 'Antonio',
        'surname' => 'Sabella',
        'role'=> 'Boolean Student',
        'age'=> 30
    ];
    return view('home', compact('name','surname','role', 'passions', 'informations'));
});

Route::get('/about', function () {
    $address = 'Via degli affari tuoi';
  
    return view('about', compact('address'));
});

Route::get('/contacts', function () {
    $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In eos aperiam quisquam quod consequuntur officiis illo, similique elgendi ducimus quidem.';
  
    return view('contacts', compact('description'));
});

/* Route::view("/about", "about");

Route::view("/contacts", "contacts"); */
