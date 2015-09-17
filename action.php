<?php
require 'vendor/autoload.php';
use GeoIp2\Database\Reader;



error_reporting(E_ALL);
ini_set('display_errors', 1);
$reader = new Reader('mmdb/GeoLite2-City.mmdb');
$record = $reader->city($_GET['ip']);
print($record->country->isoCode . "\n"); // 'US'
print($record->country->name . "\n"); // 'United States'
print($record->country->names['zh-CN'] . "\n"); // '美国'

print($record->mostSpecificSubdivision->name . "\n"); // 'Minnesota'
print($record->mostSpecificSubdivision->isoCode . "\n"); // 'MN'

print($record->city->name . "\n"); // 'Minneapolis'

print($record->postal->code . "\n"); // '55455'

print($record->location->latitude . "\n"); // 44.9733
print($record->location->longitude . "\n"); // -93.2323
exit;
