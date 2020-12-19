<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/data', function (Request $request) {
    return [
    	'phished_data' => [
    		[
	    		'username' 	=> 'haha',
	    		'password'	=> 'hadadjlad'
    		],

    		[
	    		'username' 	=> 'haha',
	    		'password'	=> 'hadadjlad'
    		],

    		[
	    		'username' 	=> 'haha',
	    		'password'	=> 'hadadjlad'
    		],

    	]
    ];
});

Route::resource('/phis', 'CredentialController');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
