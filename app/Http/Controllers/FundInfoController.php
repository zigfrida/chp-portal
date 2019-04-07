<?php

namespace App\Http\Controllers;

use App\User;
use App\FundInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FundInfoController extends Controller
{
    public function insert(Request $request){
        $class = $request->input('class');
        $inception_date = $request->input('inception_date');
        $min_investment = $request->input('min_investment');
        $distributions = $request->input('distributions');
        $preferred_return = $request->input('preferred_return');
        $performance_fee = $request->input('performance_fee');
        $redemption = $request->input('redemption');
        $subscription = $request->input('subscription');

        $id = $request->input('id');

        FundInfo::updateOrInsert(
            ['class' => $class],
            ['inception_date' => $inception_date,
             'min_investment' => $min_investment,
             'distributions' => $distributions,
             'preferred_return' => $preferred_return,
             'performance_fee' => $performance_fee,
             'redemption' => $redemption,
             'subscription' => $subscription]
        );

        return redirect('/'.$id .'/portfolio');
    }

    public function managementComment(Request $request){

        //dd($request->input('management_comment_A'));
        $management_comment_A = $request->input('management_comment_A');

        $management_comment_B = $request->input('management_comment_B');

        \DB::table('fund_infos')
            ->where('class','LIKE','A')
            ->update(['management_comment' => $management_comment_A,
        ]);

        \DB::table('fund_infos')
            ->where('class','LIKE','B')
            ->update(['management_comment' => $management_comment_B,
        ]);

        return redirect('/admin');
    }

}
