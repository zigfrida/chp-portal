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

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/{id}/portfolio', function ($id) {
    if ($id != auth()->id() && \Auth::user()->role != 'admin') {
        abort(403);
    } else {
        return view('layouts.portfolio');
    }

    // gates, how do they work??
    // if (Gate::allows('own-portfolio', Auth::user())) {
    //     return 'User'.$id;
    // } else {
    //     return 'no access';
    // }
})->middleware('auth');

Auth::routes();

Route::post('/register2', 'CustomRegister@foo');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function () {
    Route::get('/', function () {
        $users = DB::table('users')->
                    where('role', 'standard')->get();
        //dd($users);

        //return view('admin.blade')->with(compact('users'));
        return view('admin.main', compact('users'));
        //return view('admin.main', $users);
    });
});

// Route::middleware(['a', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second Middleware
//     });

//     Route::get('user/profile', function () {
//         // Uses first & second Middleware
//     });
// });
