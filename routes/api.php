<?php

use App\Task;
use Illuminate\Http\Request;

// 認證路由...
Route::auth();

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'web'], function () {

//    /**
//     * 顯示所有任務
//     */
//    Route::get('/', function () {
//        //
//        $tasks = Task::orderBy('created_at', 'asc')->get();
//
//        return view('tasks', [
//            'tasks' => $tasks
//        ]);
//
//    });
//
//    /**
//     * 增加新的任務
//     */
//    Route::post('/task', function (Request $request) {
//        $validator = Validator::make($request->all(), [
//            'name' => 'required|max:255',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect('/api')
//                ->withInput()
//                ->withErrors($validator);
//        }
//
//        // 建立該任務...
//        $task = new Task;
//        $task->name = $request->name;
//        $task->save();
//
//        return redirect('/api');
//    });
//
//
//    /**
//     * 刪除任務
//     */
//    Route::delete('/task/{id}', function ($id) {
//        Task::findOrFail($id)->delete();
//
//        return redirect('/api');
//
//    });

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
});