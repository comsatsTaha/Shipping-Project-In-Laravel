<?php

use App\Http\Controllers\ShipController;
use App\Http\Controllers\MessageController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	$countries= Country::all();
	return view('index',compact('countries'));
});

//Route to Prevert Back after Logout
Route::group(['middleware' => 'prevent-back-history'], function () {



	Auth::routes();

	Route::post('frontestimatesofships', ['as' => 'frontestimatesofships', 'uses' => 'App\Http\Controllers\PageController@frontestimatesofships']);


	Route::group(['middleware' => 'auth'], function () {

		Route::get('frontorderwithestimate/{id}', ['as' => 'frontorderwithestimate', 'uses' => 'App\Http\Controllers\PageController@frontorderwithestimate']);

		// 	Route::get('/client', 'App\Http\Controllers\HomeController@client')->name('client');
		// Route::get('/shipper', 'App\Http\Controllers\HomeController@shipper')->name('shipper1');
		
		Route::post('estimatesofships', ['as' => 'estimatesofships', 'uses' => 'App\Http\Controllers\OrderController@estimatesofships']);
		Route::get('package-details/{id}', ['as' => 'package.details', 'uses' => 'App\Http\Controllers\OrderController@packagedetail']);
		Route::get('package-delete/{id}', ['as' => 'package.delete', 'uses' => 'App\Http\Controllers\OrderController@packagedelete']);
		Route::get('package-estimation-details/{id}', ['as' => 'estimation.details', 'uses' => 'App\Http\Controllers\OrderController@estiamtiondetail']);
		Route::get('package-estimation-qoute/{id}', ['as' => 'estimation.qoutes', 'uses' => 'App\Http\Controllers\OrderController@estiamtionqoute']);
		Route::post('order-status', ['as' => 'order.status', 'uses' => 'App\Http\Controllers\OrderController@orderstatus']);
		Route::post('order-update', ['as' => 'order.update', 'uses' => 'App\Http\Controllers\OrderController@orderupdate']);
		Route::post('order-cost', ['as' => 'order.cost', 'uses' => 'App\Http\Controllers\OrderController@ordercost']);
		Route::get('package-add', ['as' => 'package.add', 'uses' => 'App\Http\Controllers\PageController@packages']);
		Route::get('package-estimation', ['as' => 'package.estimation', 'uses' => 'App\Http\Controllers\PageController@packagesestimation']);
		Route::post('package-create', ['as' => 'package.create', 'uses' => 'App\Http\Controllers\OrderController@packgecreate']);
		Route::post('package-estimation-created', ['as' => 'package.estimationcreated', 'uses' => 'App\Http\Controllers\OrderController@packgeestimationcreated']);
		Route::post('add-qoute', ['as' => 'package.qoute', 'uses' => 'App\Http\Controllers\OrderController@packgesqoute']);
		Route::resource('/ships', ShipController::class);
		Route::resource('/messages', MessageController::class);
		Route::get('createorder/{id}', ['as' => 'createorder', 'uses' => 'App\Http\Controllers\OrderController@orderwithestimate']);
		Route::get('shipper-list', ['as' => 'shipper.list', 'uses' => 'App\Http\Controllers\UserController@shipperlist']);
		
		Route::group(['middleware' => 'admin'], function () {

			Route::resource('countries', 'App\Http\Controllers\CountryController');

			Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
			Route::get('package-list', ['as' => 'package.list', 'uses' => 'App\Http\Controllers\PageController@packagelist']);
			Route::get('user-edit/{id}', ['as' => 'user.edit', 'uses' => 'App\Http\Controllers\ProfileController@useredit']);
			Route::put('user-profile-update', ['as' => 'userprofile.update', 'uses' => 'App\Http\Controllers\ProfileController@userupdate']);
			// Route::post('changeStatus', ['as' => 'userstatus.update', 'uses' => 'App\Http\Controllers\UserController@changeStatus']);
			Route::get('estimation-list', ['as' => 'estimation.list', 'uses' => 'App\Http\Controllers\OrderController@estimations']);
		});

		Route::group(['middleware' => 'client'], function () {


			Route::get('/client', 'App\Http\Controllers\HomeController@client')->name('client');
			// Route::get('package-add', ['as' => 'package.add', 'uses' => 'App\Http\Controllers\PageController@packages']);
			Route::get('package-history', ['as' => 'package.history', 'uses' => 'App\Http\Controllers\OrderController@packagelist']);
			Route::get('estimation-history', ['as' => 'estimation.history', 'uses' => 'App\Http\Controllers\OrderController@estimationlist']);
			Route::get('place-order/{id}', ['as' => 'place.order', 'uses' => 'App\Http\Controllers\OrderController@placeorder']);
			Route::get('cancelled/{id}', ['as' => 'order.cancelled', 'uses' => 'App\Http\Controllers\OrderController@ordercancelled']);
			Route::post('review-add', ['as' => 'review.add', 'uses' => 'App\Http\Controllers\OrderController@reviewadd']);
		});
		Route::group(['middleware' => 'shipper'], function () {
			Route::get('/shipper', 'App\Http\Controllers\HomeController@shipper')->name('shipper');
			Route::get('recived-package-list', ['as' => 'recived.list', 'uses' => 'App\Http\Controllers\PageController@recivedlist']);
			Route::get('estimation', ['as' => 'estimation', 'uses' => 'App\Http\Controllers\OrderController@estimation']);
		});

		Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
		Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
		Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
		Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
	});
});
