<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Subscriber;
use App\BrandProfile;
use App\SubscriberList;
use Twilio\Rest\Client;

class TwilioSMSController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        $subscriber_detail = Subscriber::where('subscriber_list_id',$request->subscriber_list_id)->first();
        // dd($subscriber_detail);
        $receiverNumber = $subscriber_detail->phone;
        $message = $request->description;
  
        try {

            $account_sid = 'AC7fe22859b60777bf2348bd95c4f6958f';
            $auth_token = '914c00291349b6ee07c75b6da728f00f';
            $twilio_number = '+13213365311';

  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
  
            dd('SMS Sent Successfully.');
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
