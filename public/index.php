<?php

require '../vendor/autoload.php';

$message = new \App\Wcs\Hello();

echo $message->talk();
