<?php

use Bref\Context\Context;

require_once isset($_SERVER['BREF_AUTOLOAD_PATH'])
     ? $_SERVER['BREF_AUTOLOAD_PATH']
     : __DIR__ . '/vendor/autoload.php';

return function ($event, Context $context) {

    return "HelloWorld!!";
};
