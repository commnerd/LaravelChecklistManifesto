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

Route::namespace('Checklists\Http\Controllers\Api\V1')
    ->prefix('checklists/api/v1')
    ->name('checklists.api.v1.')->group(function() {
    Route::resource('scaffolding', 'ScaffoldingController')->except(['create', 'edit']);
    Route::resource('checklists', 'ChecklistController')->except(['create', 'edit']);
});
