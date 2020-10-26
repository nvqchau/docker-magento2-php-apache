<?php

$host= gethostname();
$ip = gethostbyname($host);
require "/credis.php";
$redis = new Credis_Client("clusterdata");
$redis->hSet("cn_apache_containers", $ip, 1);