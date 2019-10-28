<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "AC234ef0c84d395c2bb0ed0a190e22a951";
$token  = "910ec3473dfe4a82887c40bcce3853c5";
$twilio = new Client($sid, $token);

$message = $twilio->messages
                  ->create("+919674259155", // to
                           array(
                               "body" => "You Have an New Order. Check it out",
                               "from" => "+12242698082"
                           )
                  );

print($message->sid);
