<?php

require_once __DIR__.'/../private/bootstrap.php';

$numbers = $twilio->account->available_phone_numbers->getList(
    'GB',
    'Local',
    ['Contains' => '123']
);

$to_purchase = $numbers->available_phone_numbers[0]->phone_number;

$purchased = $twilio->account->incoming_phone_numbers->create([
    'PhoneNumber' => $to_purchase
]);

echo 'Number ' . $purchased->phone_number . ' with sid ' .
        $purchased->sid . ' purchased';
