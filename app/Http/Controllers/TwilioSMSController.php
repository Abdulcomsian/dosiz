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
                $auth_token = 'fa640001b75ae92890d57e7159b2c443';
                $twilio_number = '+13213365311';
                

      
                $client = new Client($account_sid, $auth_token);
                $client->messages->create($receiverNumber, [
                    'from' => $twilio_number, 
                    'body' => $message]);
      
                // return Redirect::back();
                toastSuccess('Successfully Update');
                return redirect('dashboard/subscribe');
      
            } catch (Exception $e) {
                dd("Error: ". $e->getMessage());
            }
        }
    }
}
