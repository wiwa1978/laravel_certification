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
    
    Route::group(['namespace' => 'Certification', 'as' => 'certification.'], function () {
        /*
        * Product Specific
        */
        Route::get('certification', 'CertificationController@index')->name('index');
        
    });

    Route::group(['namespace' => 'Purchase', 'as' => 'purchase.'], function () {


        Route::get('order/{certification}', 'PurchaseController@showOrder')->name('show-order');

         /*
         * Order Specific
         */

         //Route::get('order', 'PurchaseController@index')->name('order-list');
 
         Route::post('order/{certification}', 'PurchaseController@payWithStripe')->name('order-purchase');
     
    });


    Route::group(['namespace' => 'Exam', 'as' => 'exam.'], function () {

        Route::get('exams', 'ExamController@getAllExams')->name('exams');
        Route::get('exams/{certification}', 'ExamController@getExamsPerCertification')->name('certification-exam');
        Route::post('exam/result/{exam}', 'ExamController@calculateResultforExam')->name('exam-result'); 
        Route::get('questions/{exam}', 'ExamController@getSingleExam')->name('questions-exam');
    });

    Route::group(['namespace' => 'Question', 'as' => 'question.'], function () {
        Route::get('questions', 'QuestionController@getQuestions')->name('questions');
        

        
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


    


    });
});
