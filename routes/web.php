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

        $bothFiles = DB::table('uploaded_files')
                        ->where('file_type', 'AB');

        $classFiles = DB::table('uploaded_files')
                        ->where('file_type', $user[0]->class);

        $files = DB::table('uploaded_files')
                        ->where('user_id', $id)
                        ->union($bothFiles)
                        ->union($classFiles)
                        ->get();

        return view('portfolio', compact('user', 'files'));
    }
})->middleware('auth');

Auth::routes();

Route::post('/admin', 'UserController@store');

// for formstack
Route::post('/{id}/portfolio/form1', 'UserController@storeFormstack')->middleware('auth');

Route::post('/fileupload', 'UploadController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('search', 'SearchController@search');

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

        $classABFiles = DB::table('uploaded_files')
                        ->where('file_type', 'AB')
                        ->get();

        $classAFiles = DB::table('uploaded_files')
                        ->where('file_type', 'A')
                        ->get();

        $classBFiles = DB::table('uploaded_files')
                        ->where('file_type', 'B')
                        ->get();

        return view('admin', compact('clientsA', 'clientsB', 'classABFiles', 'classAFiles', 'classBFiles'));
    });
});

Route::post('/{id}/portfolio/comment', 'PortfolioController@update');

// for Alli to change the form
Route::patch('/{id}/portfolio', 'UserController@update');

Route::view('/upload', 'upload');
Route::view('/test', 'test');

Route::post('/{id}/store', 'UserController@uploadFile');

// Route::get('/filetest', function () {
//     return Storage::download('A/easy.jpg');
// });

Route::post('/{id}/portfolio/editLP', 'LPPerformanceController@insert');

Route::get('/filetest', function () {
    return Storage::download('A/easy.jpg');
});

// FILE STUFF
Route::get('/{id}/portfolio/{type}/{filename}', function ($id, $type, $filename) {
    $filepath = ' ';
    if ($id != auth()->id() && \Auth::user()->role != 'admin') {
        abort(403);
    }

    if ($type == 'I') {
        $filepath = $id.'/'.$filename;
    } elseif ($type == 'AB') {
        $filepath = 'AB'.'/'.$filename;
    } elseif ($type = 'A') {
        $filepath = 'A'.'/'.$filename;
    } elseif ($type = 'B') {
        $filepath = 'B'.'/'.$filename;
    }

    return Storage::download($filepath);
})->middleware('auth');

Route::delete('/{id}/portfolio/{filename}', function ($id, $filename) {
    if (\Auth::user()->role != 'admin') {
        abort(403);
    } else {
        Storage::disk('local')->delete("$id/$filename");
        DB::table('uploaded_files')->where('user_id', $id)->where('filename', $filename)->delete();
    }

    return redirect('/admin');
})->middleware('auth');

// DELETE CLASS UPLOADS
Route::delete('/admin/files/{file_type}/{filename}', function ($file_type, $filename) {
    if (\Auth::user()->role != 'admin') {
        abort(403);
    } else {
        Storage::disk('local')->delete("/$file_type/$filename");
        DB::table('uploaded_files')->where('file_type', $file_type)->where('filename', $filename)->delete();
    }

    return redirect('/admin');
})->middleware('auth');

Route::post('/{id}/portfolio', 'LPPerformanceController@insert');

Route::post('/{id}/portfolio/editFI', 'FundInfoController@insert');

Route::post('/{id}/portfolio/editEI', 'ExtraInfoController@update');

Route::post('/{id}/portfolio/editFU', 'FormUserController@update');
