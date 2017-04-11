<?php


Route::group([
    'middleware' => 'access.routeNeedsRole:	Administrator',
], function () {
    Route::group(['namespace' => 'Questions'], function () {

        /*
         * Question CRUD
         */
        Route::resource('questions', 'QuestionController');

        // For DataTables
        Route::post('question/get', 'QuestionTableController')->name('question.get');
    });
});