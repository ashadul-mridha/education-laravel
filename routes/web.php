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

        Route::get('/add','AddUserController@add')->name('add.user');
        Route::post('/add','AddUserController@store_user')->name('storenew.user');
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
        Route::get('/question/create/{id}', 'ExamQuestionController@create')->name('exam_questions.create');
        Route::post('/question/store', 'ExamQuestionController@store')->name('exam_questions.store');
        Route::get('/question/list{id}', 'ExamQuestionController@list')->name('exam_questions.list');
        Route::get('/question/view/{id}', 'ExamQuestionController@view')->name('exam_questions.view');
        Route::get('/question/edit/{id}', 'ExamQuestionController@edit')->name('exam_questions.edit');
        Route::post('/question/update', 'ExamQuestionController@update')->name('exam_questions.update');
        Route::get('/question/delete/{id}', 'ExamQuestionController@delete')->name('exam_questions.delete');

        //exam result
        Route::get('/result/create', 'ExamResultController@create')->name('exam_result.create');
        Route::post('/result/store', 'ExamResultController@store')->name('exam_result.store');
        Route::get('/all-exam-result/', 'ExamResultController@all_exam')->name('all_exam_result.list');
        Route::get('/result/list/{slug}', 'ExamResultController@list')->name('exam_result.list');
        Route::get('/result/view/{id}', 'ExamResultController@view')->name('exam_result.view');
        Route::get('/result/edit/{id}', 'ExamResultController@edit')->name('exam_result.edit');
        Route::post('/result/update', 'ExamResultController@update')->name('exam_result.update');
        Route::get('/result/delete/{id}', 'ExamResultController@delete')->name('exam_result.delete');
    });


    Route::prefix('/previous/question')->group(function () {

        Route::get('/create', 'PreviousQuestionTypeController@create')->name('pre_ques.create');
        Route::post('/store', 'PreviousQuestionTypeController@store')->name('pre_ques.store');
        Route::get('/list', 'PreviousQuestionTypeController@list')->name('pre_ques.list');
        Route::get('/view/{id}', 'PreviousQuestionTypeController@view')->name('pre_ques.view');
        Route::get('/edit/{id}', 'PreviousQuestionTypeController@edit')->name('pre_ques.edit');
        Route::post('/update', 'PreviousQuestionTypeController@update')->name('pre_ques.update');
        Route::get('/delete/{id}', 'PreviousQuestionTypeController@delete')->name('pre_ques.delete');

        //privious details
        Route::get('/details/create/{id}', 'QuestionDetailsController@create')->name('pre_ques_de.create');
        Route::post('/details/store', 'QuestionDetailsController@store')->name('pre_ques_de.store');
        Route::get('/details/list/{id}', 'QuestionDetailsController@list')->name('pre_ques_de.list');
        Route::get('/details/view/{id}', 'QuestionDetailsController@view')->name('pre_ques_de.view');
        Route::get('/details/edit/{id}', 'QuestionDetailsController@edit')->name('pre_ques_de.edit');
        Route::post('/details/update', 'QuestionDetailsController@update')->name('pre_ques_de.update');
        Route::get('/details/delete/{id}', 'QuestionDetailsController@delete')->name('pre_ques_de.delete');
    });

    Route::prefix('/profession')->group(function () {

        Route::get('create', 'ProfessionController@create')->name('profession.create');
        Route::post('/store', 'ProfessionController@store')->name('profession.store');
        Route::get('/list', 'ProfessionController@list')->name('profession.list');
        Route::get('/view/{id}', 'ProfessionController@view')->name('profession.view');
        Route::get('/edit/{id}', 'ProfessionController@edit')->name('profession.edit');
        Route::post('/update', 'ProfessionController@update')->name('profession.update');
        Route::get('/delete/{id}', 'ProfessionController@delete')->name('profession.delete');
    });

    Route::prefix('/subscription')->group(function () {

        Route::get('/create', 'SubscriptionController@create')->name('subscription.create');
        Route::post('/store', 'SubscriptionController@store')->name('subscription.store');
        Route::get('/list', 'SubscriptionController@list')->name('subscription.list');
        Route::get('/view/{id}', 'SubscriptionController@view')->name('subscription.view');
        Route::get('/edit/{id}', 'SubscriptionController@edit')->name('subscription.edit');
        Route::post('/update', 'SubscriptionController@update')->name('subscription.update');
        Route::get('/delete/{id}', 'SubscriptionController@delete')->name('subscription.delete');
    });

    Route::prefix('/topices')->group(function () {


        Route::get('/type/create', 'TopicesController@topices_type')->name('topices_type.create');
        Route::post('/type/store', 'TopicesController@topices_type_store')->name('topices_type.store');
        Route::get('/type/list', 'TopicesController@topices_type_list')->name('topices_type.list');
        Route::get('/get-topics', 'TopicesController@get_topics')->name('topices.get');


        Route::get('/create', 'TopicesController@create')->name('topices.create');
        Route::post('/store', 'TopicesController@store')->name('topices.store');
        Route::get('/list/{slug}', 'TopicesController@list')->name('topices.list');
        Route::get('/view/{id}', 'TopicesController@view')->name('topices.view');
        Route::get('/edit/{id}', 'TopicesController@edit')->name('topices.edit');
        Route::post('/update', 'TopicesController@update')->name('topices.update');
        Route::get('/delete/{id}', 'TopicesController@delete')->name('topices.delete');

        Route::get('details/create', 'TopicesDetailsController@create')->name('top_de.create');
        Route::post('details/store', 'TopicesDetailsController@store')->name('top_de.store');
        Route::get('details/list/{slug}', 'TopicesDetailsController@list')->name('top_de.list');
        Route::get('details/view/{id}', 'TopicesDetailsController@view')->name('top_de.view');
        Route::get('details/edit/{id}', 'TopicesDetailsController@edit')->name('top_de.edit');
        Route::post('details/update', 'TopicesDetailsController@update')->name('top_de.update');
        Route::get('details/delete/{id}', 'TopicesDetailsController@delete')->name('top_de.delete');
    });

    Route::prefix('/about-us')->group(function () {

        Route::get('/create', 'AboutUsController@create')->name('about_us.create');
        Route::post('/store', 'AboutUsController@store')->name('about_us.store');
        Route::get('/list', 'AboutUsController@list')->name('about_us.list');
        Route::get('/view/{id}', 'AboutUsController@view')->name('about_us.view');
        Route::get('/edit/{id}', 'AboutUsController@edit')->name('about_us.edit');
        Route::post('/update', 'AboutUsController@update')->name('about_us.update');
        Route::get('/delete/{id}', 'AboutUsController@delete')->name('about_us.delete');
    });

    Route::prefix('/setting')->group(function () {

        Route::get('/create', 'BasicInfoSettingController@create')->name('setting.create');
        Route::post('/store', 'BasicInfoSettingController@store')->name('setting.store');
        Route::get('/list', 'BasicInfoSettingController@list')->name('setting.list');
        Route::get('/view/{id}', 'BasicInfoSettingController@view')->name('setting.view');
        Route::get('/edit/{id}', 'BasicInfoSettingController@edit')->name('setting.edit');
        Route::post('/update', 'BasicInfoSettingController@update')->name('setting.update');
        Route::get('/delete/{id}', 'BasicInfoSettingController@delete')->name('setting.delete');
    });







    // Route::prefix('/setting')->group(function () {

    //     Route::get('/create', 'Admin\SettingController@create')->name('setting.create');
    //     Route::post('/store', 'Admin\SettingController@store')->name('setting.store');
    // });
});


//frontend


Route::get('/', 'FrontendController@home')->name('frontend.home');
Route::get('/login', 'FrontendController@login_form')->name('login.form');

//sign up controller
Route::get('/sign-up', 'SignupController@signup_form')->name('signup.form');
Route::post('/sign-up', 'SignupController@register')->name('register');

//menu
route::get('/exam-result', 'FrontendController@exam_result')->name('exam_result');
route::get('/exam-result/{slug}', 'FrontendController@all_exam_result')->name('single_exam_result');

//free tutorials
Route::prefix('free-tutorials')->group(function () {

    route::get('/topic', 'FrontendtutorialController@free_tutorials')->name('free_tutorials');
    route::get('/topic/title/{slug}', 'FrontendtutorialController@free_tutorials_title')->name('tutorials_title');
    route::get('/topic/details/{slug}', 'FrontendtutorialController@free_tutorials_details')->name('tutorials_details');
});

route::get('/subscription-package', 'FrontendController@subscription_package')->name('subscription_package');
route::get('/contacts', 'FrontendController@contact')->name('contact');


//user nav frontend


route::get('/subscription', 'FrontendController@subscription')->name('subscription');

//full tutorials
Route::prefix('full-tutorials')->group(function () {


    route::get('/topic', 'FrontendtutorialController@full_tutorials')->name('full_tutorials');
    route::get('/topic-title-{slug}', 'FrontendtutorialController@full_tutorials_title')->name('full_tutorials_title');
    route::get('/topic-details-{slug}', 'FrontendtutorialController@full_tutorials_details')->name('full_tutorials_details');
});



route::get('/your/result','FrontendController@result')->name('result');
route::get('/exam','FrontendController@exam')->name('exam');
route::get('/start/exam/{exam_id}','FrontendController@start_exam')->name('start_exam');
route::post('/start/exam/ques/next','FrontendController@next_exam_ques')->name('next_exam_ques');
route::post('/start/exam/result','FrontendController@start_exam_result')->name('start_exam_result');


//previous Questions

route::get('/previous-questions','FrontendController@previous_questions')->name('previous_questions');
route::get('/previous-questions-details/{id}','FrontendController@previous_questions_details')->name('previous_questions_details');

route::get('/your/result', 'FrontendController@result')->name('result');
route::get('/exam', 'FrontendController@exam')->name('exam');
route::get('/start/exam/{exam_id}', 'FrontendController@start_exam')->name('start_exam');
route::post('/start/exam/ques/next', 'FrontendController@next_exam_ques')->name('next_exam_ques');
route::post('/start/exam/result', 'FrontendController@start_exam_result')->name('start_exam_result');

