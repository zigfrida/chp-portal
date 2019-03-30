<?php

namespace App\Http\Controllers;

use App\User;
use App\LPPerformance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LPPerformanceController extends Controller
{
    public function insert(Request $request){
        $class = $request->input('class');
        $month = date("n", strtotime($request->input('month')));
        $year = date("y", strtotime($request->input('year')));
        $value = (float)$request->input('value');

        $id = $request->input('id');

        LPPerformance::updateOrInsert(
            ['class' => $class,
             'month' => $month,
             'year' => $year],
            ['value' => $value]
        );
        return redirect('/'.$id .'/portfolio');
    }
}
