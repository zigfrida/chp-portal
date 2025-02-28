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
Route::get('/about',function(){
    return view('about');
});
Route::get('/people',function(){
    return view('people');
});
Route::get('/originate',function(){
    return view('originate');
});
Route::get('/specialty-lending',function(){
    return view('specialty_lending');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/home1',function(){
    return view('home1');
});
Route::get('/kelly-klatik',function(){
    return view('kelly_klatik');
});
Route::get('/dean-linden',function(){
    return view('dean_linden');
});
Route::get('/marshall-house',function(){
    return view('marshall_house');
});
Route::get('/alli-radiuk',function(){
    return view('alli_radiuk');
});
Route::get('/kevin-hung',function(){
    return view('kevin_hung');
});
Route::get('/brent-burgess',function(){
    return view('brent_burgess');
});
Route::get('/philip-nanney',function(){
    return view('philip_nanney');
});
Route::get('/geoffrey-mccord',function(){
    return view('geoffrey_mccord');
});
/*
    User's portfolio
*/
Route::get('/{id}/portfolio', function ($id) {
    if ($id != auth()->id() && \Auth::user()->role != 'admin') {
        abort(403);
    } else {

        $user = DB::table('form_users')->where('user_id', $id)->get();

        $user_table = DB::table('users')->where('id', $id)->get();

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

        $classAPA = DB::table('p_analyses')
                        ->where('class', 'A')
                        ->get();

        $classBPA = DB::table('p_analyses')
                        ->where('class', 'B')
                        ->get();

        $signature = DB::table('signatures')
                        ->where('user_id', $id)
                        ->get();

        $province = $user[0]->province;

        $country = $user[0]->country;

        return view('portfolio', compact('user', 'files', 'thisUser', 'years', 'metrics', 'fundInfo', 'extraInfo', 'classAPA', 'classBPA', 'signature', 'province', 'country', 'user_table'));
    }
})->middleware('auth');

Route::get('/{id}/edit_profile', function ($id) {
    if ($id != auth()->id() && \Auth::user()->role != 'admin') {
        abort(403);
    } else {
        $user = DB::table('form_users')->where('user_id', $id)->get();
    }
    $province = $user[0]->province;
    $country = $user[0]->country;

    $name = DB::table('users')
                ->select('name')
                ->where('id', $id)
                ->get();

    return view('edit_profile', compact('user', 'province', 'country','name'));
})->middleware('auth');

Route::patch('/{id}/edit_profile', 'FormUserController@updateProfile')->middleware('auth');
Route::patch('/{id}/edit_profile_checkboxes', 'FormUserController@updateProfileCheckboxes')->middleware('auth');


/*
    Admin Page
*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function () {
    Route::get('/', function () {
        // $clientsA = DB::table('form_users')
        //                 ->where('class', 'A')
        //                 ->where(function ($q) {
        //                     $q->where('clientType', 'individual')
        //                      ->orwhere('clientType', 'business');
        //                 })->get();
        
        $clientsA = DB::table('users')
                        ->join('form_users', 'users.id', '=', 'form_users.user_id')
                        ->where('class', 'A')
                        ->where('role', 'LIKE', 'standard')
                        ->get();


        // $clientsB = DB::table('form_users')
        //                 ->where('class', 'B')
        //                 ->where(function ($q) {
        //                     $q->where('clientType', 'individual')
        //                      ->orwhere('clientType', 'business');
        //                 })->get();

        $clientsB = DB::table('users')
                        ->join('form_users', 'users.id', '=', 'form_users.user_id')
                        ->where('class', 'B')
                        ->where('role', 'LIKE', 'standard')
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

        $fundInfoA = DB::table('fund_infos')
                ->where('class', 'A')
                ->get();

        $fundInfoB = DB::table('fund_infos')
                ->where('class', 'B')
                ->get();

        return view('admin', compact('clientsA', 'clientsB', 'clientsPC', 'classABFiles', 'classAFiles', 'classBFiles', 'fundInfoA', 'fundInfoB'));
    });
});

Route::post('/admin', 'UserController@store');

Route::post('/adminTwo', 'UserController@storeExisting');

// for Alli to update portfolio's comments
Route::post('/{id}/portfolio/comment', 'PortfolioController@update');

/*
    Formstack forms
*/
Route::post('/{id}/portfolio/form1', 'FormUserController@storeFormstack')->middleware('auth');
Route::patch('/{id}/portfolio', 'FormUserController@update');
Route::post('/{id}/portfolio/form2', 'FormUserController@storeSubAgreement')->middleware('auth');
Route::patch('/{id}/portfolio/form2', 'FormUserController@updateSubAgreement')->middleware('auth');

/*
    File uploading
*/
Route::post('/fileupload', 'UploadController@store');

/*
    File downloading
*/
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
    // return response()->download('2/test_file1.txt');
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

Route::post('/admin/editMC', 'FundInfoController@managementComment');

/*
    PDF stuff
*/
Route::get('{id}/filledform', 'PDFController@filledform');
Route::get('{id}/formtest', 'PDFController@test');

/*
    Search stuff
*/
Route::post('search', 'SearchController@search');

/*
    Not sure where this stuff came from
*/
Route::view('/upload', 'upload');

Route::post('/{id}/store', 'UserController@uploadFile');


/*
    SMS Routes
*/
Route::post('/admin/sendCode','SmsController@store');
Route::post('/{id}/edit_profile/sendCode','SmsController@store');
Route::post('/{id}/edit_profile/verifyCode','SmsController@verifyContact');

Route::post('/password/set/sendCode','SmsController@setStore');
Route::post('/password/set/verifyCode','SmsController@verifyContactSet');

Route::post('/password/reset/sendCode','SmsController@setStore');
Route::post('/password/reset/verifyCode','SmsController@verifyContactSet');

/*
    Disable user from being able to log in
*/
Route::post('/{id}/edit_profile/deleteAccount', function ($id) {
    
    \DB::table('users')
        ->where('id', $id)
        ->update([
            'banned_until' => 1,
            'role' => 'retired',
        ]);

    return redirect('/admin')->with('success', 'User Deleted');
});