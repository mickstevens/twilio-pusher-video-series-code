<?php
require_once __DIR__ . '/../../vendor/autoload.php';

require_once __DIR__ . '/settings.php';

$twilio = new \Services_Twilio(
    $settings['sid'],
    $settings['token']
);
