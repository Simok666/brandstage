<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/privacy', [PageController::class, 'privacysection']);
Route::get('/brands', [PageController::class, 'brandsection']);
Route::get('/findSpace', [PageController::class, 'spacesection']);
Route::get('/about', [PageController::class, 'aboutsection']);
Route::get('/insights', [PageController::class, 'insightsection']);
Route::get('/home', [PageController::class, 'homesection']);
Route::get('/', [PageController::class, 'homesection']);
Route::get('/blog', [PageController::class, 'blogsection']);

Route::post('/upload-image', function (Request $request) {
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time().'_'.$file->getClientOriginalName();
        $path = $file->storeAs('public/uploads', $filename); // Store in storage/app/public/uploads
        $url = asset(Storage::url($path)); // Get public URL

        return response()->json(['url' => $url]);
    }

    return response()->json(['error' => 'No file uploaded'], 400);
});

Route::group(['suffix' => '.html'], function () {

    Route::get('/{view?}', function ($view = "home") {
        $view = str_replace(["-", ".html"], [".", ""], $view);
        if (!view()->exists($view)) {
            abort(404);
        }

        return view($view);
    });
});

