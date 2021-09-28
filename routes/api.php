<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    $message = 'hello!api!';

    return response()->json([
        'message' => $message
    ]);
});

$data = array('test');

Route::get('/todo', function () {
    global $data;
    $data[] = 'api取得できました！';
    Log::info('初期表示処理');
    Log::info(print_r($data, true));
    return response()->json($data);
});

Route::post('/todo', function (Request $request) {

    global $data;

    Log::info('更新情報取得');
    Log::info('-----取得データ-----');
    Log::info($request->input('todo'));
    Log::info('-----配列保持情報（追加前）-----');
    Log::info(print_r($data, true));

    // $this->data[] = $data->toArray();
    // return response()->json($this->data);
});
