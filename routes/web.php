<?php

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







Auth::routes();




Route::get('/', function () {


    return redirect('login');
});



Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin/dashboard', 'HomeController@index')->name('home');

    Route::prefix('/profile')->group(function () {

        Route::get('/view', 'Admin\ProfileController@view')->name('profile.view');
        Route::get('/edit/{slug}', 'Admin\ProfileController@edit')->name('profile.edit');
        Route::post('/update/{id}', 'Admin\ProfileController@update')->name('profile.update');
        Route::get('/password/change', 'Admin\ProfileController@changePasswordForm')->name('password.change');
        Route::post('/password/change', 'Admin\ProfileController@PasswordStore')->name('password.store');
    });

    Route::prefix('/user')->group(function () {

        Route::get('/list', 'Admin\UserController@all_user')->name('user.view');
        Route::get('/create', 'Admin\UserController@create')->name('user.create');
        Route::post('/store', 'Admin\UserController@store')->name('user.store');
        Route::get('/delete/{id}', 'Admin\UserController@delete')->name('user.destroy');
    });

    Route::prefix('/exam')->group(function () {

        Route::get('/create', 'ExamController@create')->name('exam.create');
        Route::post('/store', 'ExamController@store')->name('exam.store');
        Route::get('/list', 'ExamController@list')->name('exam.list');
        Route::get('/view/{id}', 'ExamController@view')->name('exam.view');
        Route::get('/edit/{id}', 'ExamController@edit')->name('exam.edit');
        Route::post('/update', 'ExamController@update')->name('exam.update');
        Route::get('/delete/{id}', 'ExamController@delete')->name('exam.delete');

        //exam question
        Route::get('/question/create', 'ExamQuestionController@create')->name('exam_questions.create');
        Route::post('/question/store', 'ExamQuestionController@store')->name('exam_questions.store');
        Route::get('/question/list', 'ExamQuestionController@list')->name('exam_questions.list');
        Route::get('/question/view/{id}', 'ExamQuestionController@view')->name('exam_questions.view');
        Route::get('/question/edit/{id}', 'ExamQuestionController@edit')->name('exam_questions.edit');
        Route::post('/question/update', 'ExamQuestionController@update')->name('exam_questions.update');
        Route::get('/question/delete/{id}', 'ExamQuestionController@delete')->name('exam_questions.delete');
        
    });

    // Route::prefix('/exam/question')->group(function () {

    //     Route::get('/question/create', 'ExamQuestionController@create')->name('exam_questions.create');
    //     Route::post('/question/store', 'ExamQuestionController@store')->name('exam_questions.store');
    //     Route::get('/question/list', 'ExamQuestionController@list')->name('exam_questions.list');
    //     Route::get('/question/view/{id}', 'ExamQuestionController@view')->name('exam_questions.view');
    //     Route::get('/question/edit/{id}', 'ExamQuestionController@edit')->name('exam_questions.edit');
    //     Route::post('/question/update', 'ExamQuestionController@update')->name('exam_questions.update');
    //     Route::get('/question/delete/{id}', 'ExamQuestionController@delete')->name('exam_questions.delete');
        
    // });

    Route::prefix('/exam/question/answare')->group(function () {

        Route::get('/create', 'ExamQuestionAnswareController@create')->name('exam_ques_ans.create');
        // Route::post('/store', 'ExamQuestionAnswareController@store')->name('exam_ques_ans.store');
        Route::get('/list', 'ExamQuestionAnswareController@list')->name('exam_ques_ans.list');
        // Route::get('/view/{id}', 'ExamQuestionAnswareController@view')->name('exam_ques_ans.view');
        // Route::get('/edit/{id}', 'ExamQuestionAnswareController@edit')->name('exam_ques_ans.edit');
        // Route::post('/update', 'ExamQuestionAnswareController@update')->name('exam_ques_ans.update');
        // Route::get('/delete/{id}', 'ExamQuestionAnswareController@delete')->name('exam_ques_ans.delete');
        
    });

    // Route::prefix('/previous/question/details')->group(function () {

    //     Route::get('/details/create', 'QuestionDetailsController@create')->name('pre_ques_de.create');
    //     Route::post('/details/store', 'QuestionDetailsController@store')->name('pre_ques_de.store');
    //     Route::get('/details/list', 'QuestionDetailsController@list')->name('pre_ques_de.list');
    //     Route::get('/details/view/{id}', 'QuestionDetailsController@view')->name('pre_ques_de.view');
    //     Route::get('/details/edit/{id}', 'QuestionDetailsController@edit')->name('pre_ques_de.edit');
    //     Route::post('/details/update', 'QuestionDetailsController@update')->name('pre_ques_de.update');
    //     Route::get('/details/delete/{id}', 'QuestionDetailsController@delete')->name('pre_ques_de.delete');
        
    // });

    Route::prefix('/previous/question')->group(function () {

        Route::get('/create', 'PreviousQuestionTypeController@create')->name('pre_ques.create');
        Route::post('/store', 'PreviousQuestionTypeController@store')->name('pre_ques.store');
        Route::get('/list', 'PreviousQuestionTypeController@list')->name('pre_ques.list');
        Route::get('/view/{id}', 'PreviousQuestionTypeController@view')->name('pre_ques.view');
        Route::get('/edit/{id}', 'PreviousQuestionTypeController@edit')->name('pre_ques.edit');
        Route::post('/update', 'PreviousQuestionTypeController@update')->name('pre_ques.update');
        Route::get('/delete/{id}', 'PreviousQuestionTypeController@delete')->name('pre_ques.delete');

        //privious details
        Route::get('/details/create', 'QuestionDetailsController@create')->name('pre_ques_de.create');
        Route::post('/details/store', 'QuestionDetailsController@store')->name('pre_ques_de.store');
        Route::get('/details/list', 'QuestionDetailsController@list')->name('pre_ques_de.list');
        Route::get('/details/view/{id}', 'QuestionDetailsController@view')->name('pre_ques_de.view');
        Route::get('/details/edit/{id}', 'QuestionDetailsController@edit')->name('pre_ques_de.edit');
        Route::post('/details/update', 'QuestionDetailsController@update')->name('pre_ques_de.update');
        Route::get('/details/delete/{id}', 'QuestionDetailsController@delete')->name('pre_ques_de.delete');
        
    });

    // Route::prefix('/contact')->group(function () {

    //     Route::get('/view', 'ContactController@get_index')->name('contact.index');
    //     Route::get('/data', 'ContactController@get_data')->name('contact.data');
    //     Route::post('/store', 'ContactController@store')->name('contact.store');
    //     Route::post('/update', 'ContactController@update')->name('contact.update');
    //     Route::post('/delete', 'ContactController@delete')->name('contact.delete');
        
    // });








    Route::prefix('/setting')->group(function () {

        Route::get('/create', 'Admin\SettingController@create')->name('setting.create');
        Route::post('/store', 'Admin\SettingController@store')->name('setting.store');
    });
});
