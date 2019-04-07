<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\UploadedFiles;
use Illuminate\Support\Facades\Storage;

class SearchController extends Controller
{
    public function search(Request $request){
        //if($request->get('query')){
            $query = $request->get('query');


        //if search bar is empty, list out all portfolios.
        if(empty($query)){
            $AClients = DB::table('users')->select('users.id', 'subscriber_name', 'users.email', 'access_level', 'form_level')
                                          ->join('form_users', 'users.id', '=', 'form_users.user_id')->where('role', 'standard')->where('class' ,'A')->get();
            $BClients = DB::table('users')->select('users.id', 'subscriber_name', 'users.email', 'access_level', 'form_level')
                                          ->join('form_users', 'users.id', '=', 'form_users.user_id')->where('role', 'standard')->where('class' ,'B')->get();
        }else{ //else find name closest to query
        
            $AClients = DB::table('users')->select('users.id', 'subscriber_name', 'users.email', 'access_level', 'form_level')
                                            ->join('form_users', 'users.id', '=', 'form_users.user_id')->where('role', 'standard')->where('subscriber_name', 'LIKE', '%'. $query.'%')
                                            ->where('class' ,'A')->get();
          
            $BClients = DB::table('users')->select('users.id', 'subscriber_name', 'users.email', 'access_level', 'form_level')
                                        ->join('form_users', 'users.id', '=', 'form_users.user_id')->where('role', 'standard')->where('subscriber_name', 'LIKE', '%'. $query.'%')
                                        ->where('class' ,'B')->get();
        }
   
        $outputA = ''; 
        $outputB = '';                                           
        foreach($AClients as $key => $client){

            $access_css = $client->access_level + $client->form_level;

            $outputA .= '<div  class="column is-one-quarter">'.
                            'Name: '. $client->subscriber_name . '<br>'.
                            'Email: ' . $client->email .'<br>'.
                             '<a href="' . $client->id.'/portfolio" class="access'. $access_css. '">'.'Portfolio</a>'.
                             '<hr>'.
                         '</div>';
            }
            foreach($BClients as $key => $client){

                $access_css = $client->access_level + $client->form_level;

                $outputB .= '<div  class="column is-one-quarter">'.
                             'Name: '. $client->subscriber_name . '<br>'.
                             'Email: ' . $client->email .'<br>'.
                             '<a href="' . $client->id.'/portfolio" class="access'. $access_css. '">'.'Portfolio</a>'.
                             '<hr>'.
                         '</div>';
            }

            return response()->json(['AProfile'=>$outputA, 'BProfile' =>$outputB]);

    }    
}