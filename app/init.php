<?php

define("SITE_PATH", 'http://localhost:8000/CMS_projekt/');
define("APP_PATH", str_replace("\\" , "/" , dirname(__FILE__)) . "/");
define("SITE_RES", 'http://localhost:8000/CMS_projekt/app/res');

/* ustawienia bazy danych */
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'cms_projekt';

require_once(APP_PATH."core/core.php");
$SK = new SK_Core($server,$user,$password,$db);