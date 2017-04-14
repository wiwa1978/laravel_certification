<?php


Route::group([
    'middleware' => 'access.routeNeedsRole:	Administrator',
], function () {
    Route::group(['namespace' => 'Exams'], function () {

        /*
         * Question CRUD
         */
        Route::resource('exams', 'ExamController');

        // For DataTables
        Route::post('exam/get', 'ExamTableController')->name('exam.get');
    });
});