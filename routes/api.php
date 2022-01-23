<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\UserCollection;
use App\Http\Resources\FileTypesCollection;
use App\Http\Resources\FileTypesExtensionCollection;

use App\Http\Resources\User as UserResource;
use App\Http\Resources\FileTypes as FileTypesResource;
use App\Http\Resources\FileTypesExtension as FileTypesExtensionResource;

use App\User;
use App\FileTypes;
use App\FileTypesExtension;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user', function () {
    return new UserResource(User::find(1));
});

Route::get('/users', function () {
    return new UserCollection(User::all());
});

Route::get('/file-type', function () {
    return new FileTypesResource(FileTypes::find(3));
});

Route::get('/file-types', function () {
    return new FileTypesCollection(FileTypes::all());
});

Route::get('/file-type-ext', function () {
    return new FileTypesExtensionResource(FileTypesExtension::find(1));
});

Route::get('/file-types-exts', function () {
    return new FileTypesExtensionCollection(FileTypesExtension::all());
});
