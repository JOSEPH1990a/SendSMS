<?php
// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC309e443830ab3f1fa678a8853bf8f35d';
$auth_token = '6e670ecf0d831b9162a2b0a9275b5f22';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+18317041308";
//$a = array('+529612168345', '+15555555556');
//$a = array('+529612036734', '+529612895563','+529612168345');
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+529612036734',
    array(
        'from' => $twilio_number,
        'body' => 'Hola, haciendo pruemas msn en PHP. jose santiz ruiz!'
    )
);
