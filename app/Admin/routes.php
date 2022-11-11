<?php

use App\Admin\Controllers\Setting;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->post('/api/upload', 'HomeController@upload')->name('upload');

    $router->resource('users', UserController::class);
    $router->resource('posts', PostController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('links', LinkController::class);
    $router->resource('web-settings', WebSettingController::class);
    $router->resource('comments', CommentController::class);
});