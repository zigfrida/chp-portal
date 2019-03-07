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
        // $user = $user->toArray();

        return view('portfolio', compact('user'));
    }
})->middleware('auth');

Auth::routes();

Route::post('/admin', 'CustomRegister@foo');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function () {
    Route::get('/', function () {
        $users = DB::table('users')->
                    where('role', 'standard')->get();

        return view('admin', compact('users'));
    });
});
