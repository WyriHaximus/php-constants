<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

exit(
    defined('WyriHaximus\Constants\Boolean\TRUE_') &&
    defined('WyriHaximus\Constants\Cron\HOURLY') &&
    defined('WyriHaximus\Constants\Numeric\ZERO') ? 0 : 255
);
