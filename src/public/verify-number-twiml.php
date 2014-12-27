<?php
require_once __DIR__ . '/../private/bootstrap.php';

$response = new \Services_Twilio_Twiml();
$response->say('Packt Video Phone Number Verification System');
$response->gather([
    'timeout' => 180,
    'numDigits' => 4,
    'action' => 'http://public-url/verify-process.php?code=' . $_GET['code'],
    'method' => 'POST'
])->say('Please enter your four digit verification code to continue');

print $response;
