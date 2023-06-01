<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");
$twilio = new Client("AC3b065e01f55d3f1af57e38a9fe91eef5", "a462f869f9921faad721e866c2a74b54");

$message = $twilio->messages
                  ->create("+213777459649", // to
                           ["body" => "Hi there", "from" => "+12543293346"]
                  );

print($message->sid);