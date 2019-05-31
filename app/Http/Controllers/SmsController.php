<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Twilio\Jwt\ClientToken;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Alert;

class SmsController extends Controller
{

    protected $code, $smsVerifcation;

    //Constructor
    function __construct(){
        $this->smsVerifcation = new \App\SmsVerification();
    }

    public function store(Request $request){
        $id = $request->input('code_id');
        $request['user_id'] = $id;
        $phone = \DB::table('form_users')
                        ->where('user_id', $id)
                        ->get();
        $request['phone'] = $phone[0]->phone_mobile;

        $code = rand(1000, 9999); //generate random code
        $request['code'] = $code; //add code in $request body
        $this->smsVerifcation->store($request); //call store method of model
        return $this->sendSms($request); // send and return its response

    }

    public function sendSms($request){

        $accountSid = config('app.twilio')['TWILIO_ACCOUNT_SID'];
        $authToken = config('app.twilio')['TWILIO_AUTH_TOKEN'];

        try{
            $client = new Client(['auth' => [$accountSid, $authToken]]);
            $result = $client->post('https://api.twilio.com/2010-04-01/Accounts/'.$accountSid.'/Messages.json',
            ['form_params' => [
                'Body' => 'CODE: '. $request->code, //set message body
                'To' => $request->phone,
                'From' => '+16042108680' //we get this number from twilio
            ]]);
            //dd($result);
            //return redirect('/'.$request->user_id.'/edit_profile');
            //return true;
            //return $result;
        }
        catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }

    public function verifyContact(Request $request){
        $id = $request->input('code_id');
        
        $smsVerifcation = $this->smsVerifcation::where('user_id','=',$id)
                ->latest() //show the latest if there are multiple
                ->first();

        if ($request->code == $smsVerifcation->code){
            $request["status"] = 'verified';

            $smsVerifcation->updateModel($request);
            //return $smsVerifcation->updateModel($request);
            $msg["message"] = "verified";

            $newPassword = Hash::make($request->input('password'));

            \DB::table('users')
                ->where("id", $id)
                ->update(['password' => $newPassword]);

            return redirect('/'.$id.'/edit_profile')->with('success', 'Password Updated');
            //return $msg;
        } else {
            $msg["message"] = "not verified";
            // return $msg;
            return redirect()->back()->with('errors', 'Incorrect Verification Code');
        }
    }

}
