<?php

require_once __DIR__ . '/../private/bootstrap.php';

$response = new \Services_Twilio_Twiml();

if ($_POST['Digits'] == $_GET['code']) {
    $response->say('Thanks; your phone number has been verified. You may now close your browser');

    // Mark the user as verified in our database
} else {
    $response->say('Sorry, the code you entered was not correct');
}

print $response;
