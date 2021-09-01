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

// Route::get('/', function () {
//     return redirect()->route('project.index');
// });


Auth::routes();
/*
TODO ----- User Controller ----- */
Route::get('/', 'PagesController@index')->name('index');
Route::get('/checklist', 'PagesController@checklist')->name('checklist');
Route::get('/doneRegister1/{id}', 'PagesController@doneRegister1')->name('doneRegister1');
Route::get('/doneRegister2/{id}', 'PagesController@doneRegister2')->name('doneRegister2');
Route::get('/errorRegister1', 'PagesController@errorRegister1')->name('errorRegister1');
Route::get('/errorRegister2', 'PagesController@errorRegister2')->name('errorRegister2');
Route::get('/announce', 'PagesController@announce')->name('announce');
Route::get('/announceSecond', 'PagesController@announce_second')->name('announce_second');
Route::get('/userPrint/{id}', 'PagesController@user_print')->name('user_print');
Route::get('/userPrint2/{id}', 'PagesController@user_print2')->name('user_print2');

Route::get('/register1', 'PagesController@register_first')->name('register_first');
Route::get('/register2', 'PagesController@register_second')->name('register_second');

Route::post('/postregister1', 'PagesController@postregister1')->name('postregister1');
Route::post('/postregister2', 'PagesController@postregister2')->name('postregister2');
Route::get('/searchchecklist', 'PagesController@searchchecklist')->name('searchchecklist');
Route::get('/searchannonce1', 'PagesController@searchannonce1')->name('searchannonce1');
Route::get('/searchannonce2', 'PagesController@searchannonce2')->name('searchannonce2');

/*
TODO ----- Admin Controller ----- */
Route::get('/admin/login/FAdaf54', 'AdminController@loginAdmin')->name('loginAdmin');
Route::get('/admin/index/ETD4ax', 'AdminController@index')->name('indexAdmin');
Route::get('/admin/checkUser1/{id}/FSDa445', 'AdminController@check_user1')->name('check_user1');
Route::get('/admin/checkUser2/{id}/FSDa445', 'AdminController@check_user2')->name('check_user2');
Route::get('/admin/approve1/NNBS42', 'AdminController@approve1')->name('approve1');
Route::get('/admin/approve2/JIHRW43', 'AdminController@approve2')->name('approve2');
Route::get('/admin/setting/HFHDGFH3', 'AdminController@setting')->name('setting');
Route::get('/admin/updatestatus1/gsGDa14', 'AdminController@updatestatus1')->name('updatestatus1');
Route::get('/admin/updatestatus2/fDas20', 'AdminController@updatestatus2')->name('updatestatus2');
Route::get('/admin/deletes/dsaAS5', 'AdminController@deletes')->name('deletes');
Route::get('/admin/getapprove1/{id}', 'AdminController@getapprove1')->name('getapprove1');
Route::get('/admin/getapprove2/{id}', 'AdminController@getapprove2')->name('getapprove2');
Route::get('/admin/deletestudent/{id}', 'AdminController@deletestudent')->name('deletestudent');
Route::get('/admin/deletestudent2/{id}', 'AdminController@deletestudent2')->name('deletestudent2');
Route::get('/admin/exportexcel', 'AdminController@exportexcel')->name('exportexcel');
Route::get('/admin/exportexcel2', 'AdminController@exportexcel2')->name('exportexcel2');

Route::get('/admin/searchapprove1', 'AdminController@searchapprove1')->name('searchapprove1');
Route::get('/admin/searchapprove2', 'AdminController@searchapprove2')->name('searchapprove2');
Route::get('/admin/searchindexadmin', 'AdminController@searchindexadmin')->name('searchindexadmin');
Route::post('/admin/postlogin', 'AdminController@postlogin')->name('postlogin');
Route::post('/admin/postsetyear', 'AdminController@postsetyear')->name('postsetyear');
Route::post('/admin/postsetnews', 'AdminController@postsetnews')->name('postsetnews');
Route::post('/admin/postsettels', 'AdminController@postsettels')->name('postsettels');
Route::post('/admin/updatesstudentone', 'AdminController@updatesstudentone')->name('updatesstudentone');
Route::post('/admin/updatesstudentfour', 'AdminController@updatesstudentfour')->name('updatesstudentfour');
// Route::get('/admin', 'LoginAdminController@index')->name('admin');
// Route::post('/adminlogin', 'LoginAdmin@MakeLogin')->name('adminlogin');

// Route::get('/admin/login', 'LoginAdmin@showLogin')->name('showAdminLogin');
// Route::post('/admin/login', 'LoginAdmin@doLogin')->name('doAdminLogin');



// Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/project', 'ProjectController');

// Route::view('/upload', 'upload');
// Route::post('/uploadfile', 'ProjectController@uploadfile');

// Route::get('/project/{id}/list', 'TaskController@index')->name('task.index');
// Route::get('/project/{project_id}/task/create', 'TaskController@create')->name('task.create');
// Route::post('/project/{project_id}/task/store', 'TaskController@store')->name('task.store');
// Route::get('/task/{id}/edit', 'TaskController@edit')->name('task.edit');
// Route::put('/task/{id}/update', 'TaskController@update')->name('task.update');
// Route::delete('/task/{id}/destroy', 'TaskController@destroy')->name('task.destroy');


