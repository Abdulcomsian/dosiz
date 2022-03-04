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
            //  sms sending
            $sid = env("TWILIO_SID");
            return $sid;
          
            $clientNumber = Customer::where('id', $id)->value('phone');
            // comment twillio not working===========obaid
            $token = env("TWILIO_AUTH_TOKEN");
            return $token;
            $twilio = new Client($sid, $token);
            $message = $twilio->messages
                ->create(
                    "+1$clientNumber", // to
                    array(
                        "from" => "+16472497970",
                        "body" => "Hi " . $customerName . ". The payment you sent to EmpireOne Credit Solutions for the amount of  $ " . number_format((float)$amount, 2, '.', '') . " has been accepted. Your balance now is $ $amount_pending."
                    )
                );
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
