<?php
require_once __DIR__ . '/../../vendor/autoload.php';

require_once __DIR__ . '/settings.php';

$twilio = new \Services_Twilio(
    $settings['sid'],
    $settings['token']
);

$pusher = new \Pusher(
    $settings['key'],
    $settings['secret'],
    $settings['app_id']
);

$pheanstalk = function () {
    return new \Pheanstalk_Pheanstalk('127.0.0.1');
};
