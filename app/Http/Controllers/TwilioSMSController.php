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
        $receiverNumber = "+972533856105";
        $message = "This is testing from Acuralhub.com from rawalpindi";
  
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
