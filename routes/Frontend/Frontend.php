<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');
Route::get('macros', 'FrontendController@macros')->name('macros');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['namespace' => 'Modules', 'as' => 'modules.'], function () {
        /*
        * Product Specific
        */
        Route::get('product', 'ProductController@index')->name('product');
        Route::get('order/{product}', 'PurchaseController@showOrder')->name('show-order');

         /*
         * Order Specific
         */

         //Route::get('order', 'PurchaseController@index')->name('order-list');
 
         Route::post('order/{product}', 'PurchaseController@payWithStripe')->name('order-purchase');
     
    });

    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');


        Route::get('questions', 'QuestionController@getQuestions')->name('questions');
        Route::get('questions/{exam}', 'QuestionController@getSingleExam')->name('questions-exam');

        Route::get('exams', 'ExamController@getAllExams')->name('exams');
        Route::get('exams/{product}', 'ExamController@getExamsPerProduct')->name('product-exam');
        Route::post('exam/result/{exam}', 'QuestionController@calculateResultforExam')->name('exam-result');




    });
});
