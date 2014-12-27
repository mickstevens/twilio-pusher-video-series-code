<?php

require_once __DIR__ . '/../private/bootstrap.php';

$response = new \Services_Twilio_Twiml();

$response->say('Thanks for your message');

print $response;
