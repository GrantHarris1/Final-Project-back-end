<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ToolStatusController;
use App\Models\Brand;
use Illuminate\Support\Facades\Log;
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
Route::prefix('v1')->group(function() {
    // need to be logged in
    Route::middleware('auth:api')->group(function() {
        Route::get('/user', function(Request $request){
            return $request->user();
        });
        Route::get('/checkedoutbyid', [ToolStatusController::class, 'checkedOutByUserId']);
    });

    // dont need to be logged in
    Route::get('/test', function(Request $request){
        return 'Authenticated';
    });
    Route::get('/tools', [ToolController::class, 'show']);
    // Route::get('/brands', [BrandController::class, 'show']);

    // closure
    Route::get('/brands', [BrandController::class, 'show']);
});
