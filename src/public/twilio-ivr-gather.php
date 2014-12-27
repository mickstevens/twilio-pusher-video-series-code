<?php

require_once __DIR__ . '/../private/bootstrap.php';

$digits = (isset($_REQUEST['Digits'])) ? $_REQUEST['Digits'] : null;

$response = new \Services_Twilio_Twiml();

switch ($digits) {
    case '1':
        $response->say('Why did the chicken cross the road');
        break;
    case '2':
        $response->say('Welcome to the management conference room');
        $response->dial()->conference('management');
        break;
    case '3':
        $response->dial()->number('+'); // number to call
        break;
    case '4':
        $response->record([
            'maxLength' => '120',
            'playBeep' => true,
            'action' => 'http://public-url/voicemail-record-transcribe.php',
            'method' => 'POST',
            'finishOnKey' => '1234567890*#',
            'transcribe' => true,
            'transcribeCallback' => 'http://public-url/voicemail-transcribe.php'
        ]);
        break;
    case '5':
        $response->play('http://com.twilio.music.ambient.s3.amazonaws.com/gurdonark_-_Plains.mp3');
        break;
}

print $response;
