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

Route::namespace('Checklists\Http\Controllers')->group(function() {
    Route::name('scaffolding.index')->get('scaffolding', 'ScaffoldingController@index');
    Route::name('checklist.index')->get('checklists', 'ChecklistController@index');
});
