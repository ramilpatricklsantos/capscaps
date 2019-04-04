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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->name('users');
Route::post('/users/{id}/approve', 'UserController@approve');
Route::post('/users/{id}/edit', 'UserController@edit');
Route::post('/users/{id}/update', 'UserController@update');
Route::post('/users/{id}/delete', 'UserController@destroy');

/*
	- register a route named 'home' that will use the index method of HomeController when a get request is sent to the '/home' URI
		- Route::?('?', '?')->?('?');

	- register a resourceful route that will use the corresponding methods of BookController when HTTP requests are made to the 'books' URI
		- Route::?('?', '?');

	- register a resourceful route that will use the corresponding methods of CategoryController when HTTP requests are made to the 'categories' URI
		- Route::?('?', '?');

	- register a route that will use the borrow_form method of BookController when a get request is sent to the '/books/{id}/borrow_form' URI. Chain the middleware() method using 'available' as its argument.
		- Route::?('?', '?')->?('?');

	- register a route that will use the borrow method of BookController when a post request is sent to the '/books/{id}/borrow' URI. 
		- Route::?('?', '?');

	- register a route that will use the return_form method of BookRequestController when a get request is sent to the '/book_requests/{id}/return_form' URI. 
		- Route::?('?', '?');

	- register a route that will use the return method of BookController when a post request is sent to the '/books/{id}/return' URI. 
		- Route::?('?', '?');

	- register a route that will use the book_borrowers method of BookController when a get request is sent to the '/api/book_borrowers/{book_id}/{user_id}' URI. 
		- Route::?('?', '?');

	- register a resourceful route that will use the corresponding methods of UserController when HTTP requests are made to the '/users' URI
		- Route::?('?', '?');

	- register a route that will use the approve method of UserController when a post request is sent to the '/users/{id}/approve' URI. 
		- Route::?('?', '?');

	- register a route that will use the books_borrowed method of UserController when a get request is sent to the '/account' URI. 
		- Route::?('?', '?');

	- register a route that will use the book_requests method of BookRequestController when a get request is sent to the '/book_requests' URI. 
		- Route::?('?', '?');

	- register a route that will use the approve method of BookRequestController when a get request is sent to the '/book_requests/{id}/approve' URI. 
		- Route::?('?', '?');

	- register a route that will use the decline method of BookRequestController when a get request is sent to the '/book_requests/{id}/decline' URI. 
		- Route::?('?', '?');

*/