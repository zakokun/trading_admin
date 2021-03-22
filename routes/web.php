<?php

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
    return view('index');
});

Route::group(['middleware' => ['web']], function () {
    Route::any("/{controller}/{action}", function ($class, $action) {
        $class = "App\\Http\\Controllers\\" . ucfirst(strtolower($class)) . 'Controller';
        if (class_exists($class)) {
            $ctrl = \App::make($class);
            return \App::call([$ctrl, $action]);
        }
        return abort(404);

    })->where(['class' => '[0-9a-zA-Z]+', 'action' => '[0-9a-zA-Z]+']);
});
