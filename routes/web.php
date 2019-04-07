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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

/*
    User's portfolio
*/
Route::get('/{id}/portfolio', function ($id) {
    if ($id != auth()->id() && \Auth::user()->role != 'admin') {
        abort(403);
    } else {
        $user = DB::table('form_users')->where('user_id', $id)->get();

        $bothFiles = DB::table('uploaded_files')
                        ->where('file_type', 'AB');

        $classFiles = DB::table('uploaded_files')
                        ->where('file_type', $user[0]->class);

        $files = DB::table('uploaded_files')
                        ->where('user_id', $id)
                        ->union($bothFiles)
                        ->union($classFiles)
                        ->get();

        $thisUser = DB::table('p_i_summaries')
                        ->where('user_id', $id)
                        ->get();

        $years = DB::table('l_p_performances')->select('year')->distinct()
                        ->where('class', 'LIKE', $user[0]->class)
                        ->get();

        $metrics = DB::table('metrics')->get();

        $fundInfo = DB::table('fund_infos')
                        ->where('class', $user[0]->class)
                        ->get();

        $extraInfo = DB::table('extra_infos')
                        ->get();

        return view('portfolio', compact('user', 'files', 'thisUser', 'years', 'metrics', 'fundInfo', 'extraInfo'));
    }
})->middleware('auth');

/*
    Admin Page
*/

Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function () {
    Route::get('/', function () {
        $clientsA = DB::table('form_users')
                        ->where('class', 'A')
                        ->get();
        $clientsB = DB::table('form_users')
                        ->where('class', 'B')
                        ->get();

        $clientsPC = DB::table('form_users')
                        ->where('class', 'NOT LIKE', 'A')
                        ->where('class', 'NOT LIKE', 'B')
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

        return view('admin', compact('clientsA', 'clientsB', 'clientsPC', 'classABFiles', 'classAFiles', 'classBFiles'));
    });
});

Route::post('/admin', 'UserController@store');

// for Alli to update portfolio's comments
Route::post('/{id}/portfolio/comment', 'PortfolioController@update');

/*
    Formstack forms
*/
Route::post('/{id}/portfolio/form1', 'FormUserController@storeFormstack')->middleware('auth');
Route::patch('/{id}/portfolio', 'FormUserController@update');
Route::post('/{id}/portfolio/form2', 'FormUserController@storeSubAgreement')->middleware('auth');

/*
    File uploading
*/
Route::post('/fileupload', 'UploadController@store');

Route::get('/{id}/portfolio/{type}/{filename}', function ($id, $type, $filename) {
    $filepath = ' ';
    if ($id != auth()->id() && \Auth::user()->role != 'admin') {
        abort(403);
    }

    if ($type == 'I') {
        $filepath = $id.'/'.$filename;
    } elseif ($type == 'AB') {
        $filepath = 'AB'.'/'.$filename;
    } elseif ($type == 'A') {
        $filepath = 'A'.'/'.$filename;
    } elseif ($type == 'B') {
        $filepath = 'B'.'/'.$filename;
    }

    return Storage::download($filepath);
})->middleware('auth');

/*
    File deleting
*/
// DELETE INDIVIDUAL FILES
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

/*
    Amanda stuff
*/
Route::post('/{id}/portfolio/editLP', 'LPPerformanceController@insert');

Route::post('/{id}/portfolio/editFI', 'FundInfoController@insert');

Route::post('/{id}/portfolio/editEI', 'ExtraInfoController@update');

/*
    PDF stuff

    will combine later.


*/

Route::get('{id}/filledform', 'PDFController@filledform');

Route::get('1/formtest', 'PDFController@test');

/*
    Search stuff
*/
Route::post('search', 'SearchController@search');

/*
    Not sure where this stuff came from
*/
Route::view('/upload', 'upload');

Route::post('/{id}/store', 'UserController@uploadFile');
