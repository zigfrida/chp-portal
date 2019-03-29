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
    public function update(Request $request, $id)
    {

        $comment = $request->input('comment');

        PISummary::where('user_id', $id)->update(['comment' => $comment]);

        return redirect('/'.$id.'/portfolio');
    }

}