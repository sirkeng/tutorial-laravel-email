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


use Illuminate\Support\Facades\Mail;



Route::get('/', function () {
    // return view('welcome');


	$data = [

		'title'=> 'Hi student I hope you like the course',
		'content'=> 'This laravel course was created with a lot of love and dedication for you'


	];


	Mail::send('emails.test', $data, function($message){


		$message->to('naykeng_1kz1@hotmail.com', 'SirKenG')->subject('Hello student how are you?');


	});




});
