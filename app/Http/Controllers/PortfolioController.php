<?php

namespace App\Http\Controllers;

use App\User;
use App\PISummary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PortfolioController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User                $user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $modifyPIsummary = PISummary::where('user_id','=',$user->id);
        //$comment = Input::get('comment');
        // $modifyPIsummary->comment = Input::get('comment');
        //$user->comment = $request->input('comment');
        // $user->save();

        // $sql = "UPDATE p_i_summaries SET comment = ? WHERE user_id = ?"
        // DB::update($sql, array($comment, $user->id));
        // alert("test");

        // return Redirect::to('/home');
    }

}