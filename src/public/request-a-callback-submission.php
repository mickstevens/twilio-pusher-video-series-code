<?php
require_once __DIR__ . '/../private/bootstrap.php';

$channel = 'callback.requests';
$event_name = 'new.request';

$pusher->trigger($channel, $event_name, $_POST);
