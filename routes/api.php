<?php

use App\Task;
use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'web'], function () {

    /**
     * 顯示所有任務
     */
    Route::get('/', function () {
        //
        return view('tasks');
    });

    /**
     * 增加新的任務
     */
    Route::post('/task', function (Request $request) {
        //
    });

    /**
     * 刪除任務
     */
    Route::delete('/task/{task}', function (Task $task) {
        //
    });
});