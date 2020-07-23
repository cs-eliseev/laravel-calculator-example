<?php

use App\Config\ExceptionCodeConfig;

return [
    ExceptionCodeConfig::UNKNOWN_ERROR => 'Unknown error',

    ExceptionCodeConfig::ORDER_MODEL_ARGUMENT_IS_NOT_SET => 'Argument ":name" is not set',
    ExceptionCodeConfig::ORDER_MODEL_UNDEFINED_PACKAGE => 'Undefined package: ":package"',
    ExceptionCodeConfig::ORDER_MODEL_CHANGE_PRICE => 'Price change ":price_old" vs ":price_new"',
    ExceptionCodeConfig::ORDER_MODEL_NOT_DELIVERY_DAY => 'Order not delivery day ":day"',
    ExceptionCodeConfig::ORDER_MODEL_LAST_DAY => 'Failed date',
];
