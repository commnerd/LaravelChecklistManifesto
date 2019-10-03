<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('scaffolding', '\Checklists\Http\Controllers\ScaffoldingController')->except(['create', 'edit']);
Route::resource('checklist', '\Checklists\Http\Controllers\ChecklistController')->except(['create', 'edit']);
