<?php

Route::get("/", function(){
	return view('layout');

})->name('layout');

Route::get("/parrafos", function(){
	return view('parrafos');

})->name('parrafos');

Route::get("/rimas", function(){
	return view('rimas');

})->name('rimas');

Route::post('/controller','ProblemasController@Resolve');