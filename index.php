<?php
require_once 'App1/Begin1/MyEcho.php';
require_once 'App2/End2/myEcho.php';

use App1\Begin1 as App1;
use App2\End2 as App2;

$a = new App1\MyEcho();
$a -> prnt();

echo "<br>";

App2\myEcho();

