<?php

use Bref\Context\Context;

require __DIR__ . '/vendor/autoload.php';

return function ($event, Context $context) {

    return "HelloWorld";
};
