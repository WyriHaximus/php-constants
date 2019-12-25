<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

exit(
    defined('WyriHaximus\Constants\Numeric\ZERO') &&
    defined('WyriHaximus\Constants\HTTPStatusCodes\NOT_FOUND') &&
    defined('WyriHaximus\Constants\Boolean\TRUE_') ? 0 : 255
);
