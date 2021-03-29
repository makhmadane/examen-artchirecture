<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers;
Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
   // $router->get('/famille', 'FamilleController@index');
    $router->resource('famille', FamilleController::class);

});
