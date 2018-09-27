<?php
/**
 * Created by PhpStorm.
 * User: chuka
 * Date: 25/09/2018
 * Time: 10:50 AM
 */

function __autoload($class){
    include "classes/" . $class . ".php";
}
$site = new site;
$site->addHeader("header.php");
$site->addFooter("footer.php");
$page = new page;