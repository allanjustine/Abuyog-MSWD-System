<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function sendSms()
    {
        // Retrieve credentials from the .env file
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $from = env('TWILIO_PHONE'); // Your Twilio phone number

        // Check if credentials are set
        if (!$sid || !$token || !$from) {
            return "Error: Missing Twilio credentials!";
        }

        // Recipient phone number
        $to = '+639268307424'; // Replace this with the recipient's phone number

        // Create a Twilio client
        $twilio = new Client($sid, $token);

        try {
            // Send the SMS
            $message = $twilio->messages->create(
                $to, // To phone number
                [
                    'from' => $from, // Twilio phone number
                    'body' => 'Hello, this is a test message from Twilio!' // Message content
                ]
            );

            return "Message sent successfully!";
        } catch (\Exception $e) {
            // If there is an error, return the error message
            return "Error: " . $e->getMessage();
        }
    }
}
