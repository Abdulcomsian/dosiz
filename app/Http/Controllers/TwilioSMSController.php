<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Subscriber;
use App\BrandProfile;
use App\SubscriberList;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Redirect;

class TwilioSMSController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $subscriber_details = Subscriber::where('subscriber_list_id',$request->subscriber_list_id)->get();
        // dd($subscriber_detail);
        foreach($subscriber_details as $subscriber_detail){

            $receiverNumber = $subscriber_detail->phone;
            $message = $request->description;
      
            try {

                $account_sid = 'AC7fe22859b60777bf2348bd95c4f6958f';
                $auth_token = '93e510902955e8b9b119382996cb485e';
                $twilio_number = '+13213365311';

      
                $client = new Client($account_sid, $auth_token);
                $client->messages->create($receiverNumber, [
                    'from' => $twilio_number, 
                    'body' => $message]);
      
                return Redirect::back();
      
            } catch (Exception $e) {
                dd("Error: ". $e->getMessage());
            }
        }
    }
}
