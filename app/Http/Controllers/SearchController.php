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
            $AClients = DB::table('form_users')->select('user_id', 'subscriber_name', 'email', 'access_level', 'form_level')
                                          ->where('class' ,'A')
                                          ->where(function($q){
                                              $q->where('clientType', 'individual')
                                              ->orwhere('clientType', 'business');
                                          })->get();
                                          
            $BClients = DB::table('form_users')->select('user_id','subscriber_name', 'email', 'access_level', 'form_level')
                                               ->where('class' ,'B')
                                              ->where(function($q){
                                                 $q->where('clientType', 'individual')
                                                  ->orwhere('clientType', 'business');
                                               })->get();
        }else{ //else find name closest to query
        
            $AClients = DB::table('form_users')->select('user_id','subscriber_name', 'email', 'access_level', 'form_level')
                                             ->where('subscriber_name', 'LIKE', '%'. $query.'%')
                                             ->where('class' ,'A')
                                             ->where(function($q){
                                                $q->where('clientType', 'individual')
                                                ->orwhere('clientType', 'business');
                                            })->get();
          
            $BClients = DB::table('form_users')->select('user_id', 'subscriber_name', 'email', 'access_level', 'form_level')
                                        ->where('subscriber_name', 'LIKE', '%'. $query.'%')
                                        ->where('class' ,'B')
                                        ->where(function($q){
                                            $q->where('clientType', 'individual')
                                            ->orwhere('clientType', 'business');
                                        })->get();
        }
   
        $outputA = ''; 
        $outputB = '';                                           
        foreach($AClients as $key => $client){

            $outputA .= '<div  class="column is-one-quarter">'.
                            'Name: '. $client->subscriber_name . '<br>'.
                            'Email: ' . $client->email .'<br>'.
                             '<a href="' . $client->user_id.'/portfolio">'.'Portfolio</a>'.
                             '<hr>'.
                         '</div>';
            }
            foreach($BClients as $key => $client){

                $access_css = $client->access_level + $client->form_level;

                $outputB .= '<div  class="column is-one-quarter">'.
                             'Name: '. $client->subscriber_name . '<br>'.
                             'Email: ' . $client->email .'<br>'.
                             '<a href="' . $client->user_id.'/portfolio">'.'Portfolio</a>'.
                             '<hr>'.
                         '</div>';
            }

            return response()->json(['AProfile'=>$outputA, 'BProfile' =>$outputB]);

    }    
}