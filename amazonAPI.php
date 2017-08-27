<?php

use MarcL\AmazonAPI;
use MarcL\AmazonUrlBuilder;

require('vendor/autoload.php');
include 'secretKeys.inc';
session_start();

$urlBuilder = new AmazonUrlBuilder($keyId, $secretKey,$associateId,$_GET['country']);
// Setup a new instance of the AmazonAPI and define the type of response
$amazonAPI = new AmazonAPI($urlBuilder, 'simple');
$items = $amazonAPI->ItemSearch($_GET['search'], $_GET['category']);
$_SESSION['items'] = $items;
session_write_close();
header('Location:http://' . $_SERVER['HTTP_HOST'] . '/result.php');
