<?php

/**
 * 测试类
 * @author LinkGeek
 */

require __DIR__ . '/../vendor/autoload.php';

echo \lgPrint\LgPrint::show(200, 'ok');

$number = '102400010';
echo \lgPrint\LgPrint::byte_format($number);
