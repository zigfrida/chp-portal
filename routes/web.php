<?php

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
//use Illuminate\Support\Facades\Gate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{id}/portfolio', function ($id) {
    if ($id != auth()->id() && \Auth::user()->role != 'admin') {
        abort(403);
    } else {
        $user = DB::table('users')->where('id', $id)->get();
        $files = DB::table('uploaded_files')->where('user_id', $id)->get();

        return view('portfolio', compact('user', 'files'));
    }
})->middleware('auth');

Route::get('/{id}/portfolio/{filename}', function ($id, $filename) {
    if ($id != auth()->id() && \Auth::user()->role != 'admin') {
        abort(403);
    } else {
        $filepath = $id.'/'.$filename;

        return Storage::download($filepath);
    }
})->middleware('auth');

Auth::routes();

Route::post('/admin', 'UserController@store');

Route::post('/fileupload', 'UploadController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function () {
    Route::get('/', function () {
        $clientsA = DB::table('users')
                        ->where('role', 'standard')
                        ->where('class', 'A')
                        ->get();
        $clientsB = DB::table('users')
                        ->where('role', 'standard')
                        ->where('class', 'B')
                        ->get();

        return view('admin', compact('clientsA', 'clientsB'));
    });
});

Route::view('/upload', 'upload');
Route::view('/test', 'test');

Route::post('/{id}/store', 'UserController@uploadFile');
Route::get('files/{file_name}', function ($file_name = null) {
    $path = storage_path().'/'.'app'.$file_name;
    if (file_exists($path)) {
        return Response::download($path);
    }
});
