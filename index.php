<?php

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

/** info clear no-cache */
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Pragma: no-cache"); // HTTP/1.0

/** Ошибки на экран info clear */
ini_set('display_errors', 1);
error_reporting(E_ALL);

/** Абсолютный путь к проекту */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

include(ABSPATH . "controller/router/Router.php");

$routerObject = new Router();

$routerObject->run();
?>
<a href="/news">Go to class News</a>
<br>
<a href="/products">Go to class Products</a>
<br>
<a href="/portfolio">Go to class Portfolio</a>
<br>
<a href="/contacts">Go to class Contacts</a>