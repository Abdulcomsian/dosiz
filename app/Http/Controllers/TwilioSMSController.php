<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;

class TwilioSMSController extends Controller
{
    public function index()
    {
        $receiverNumber = "+923075207206";
        $message = "This is testing from Acuralhub.com from rawalpindi";
  
        try {

            $account_sid = env("AC7fe22859b60777bf2348bd95c4f6958f");
            $auth_token = env("7e93da03164080ec5634b01d48aae213");
            $twilio_number = env("+972533856105");
            
  
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
