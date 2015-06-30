<?php
include_once ('config.php');
$con = mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD);
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db(DB_DATABASE, $con);

$sql="CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "make(
  `makeid` int(10) NOT NULL AUTO_INCREMENT,
  `makename` varchar(200) NOT NULL DEFAULT 'NULL',
  PRIMARY KEY (`makeid`))";
	mysql_query($sql,$con);

$sql3="CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "model(
  `modelid` int(10) NOT NULL AUTO_INCREMENT,
  `makeid` int(10) NOT NULL DEFAULT '0',
  `modelname` varchar(200) NOT NULL,
  PRIMARY KEY (`modelid`))"; 
	mysql_query($sql3,$con);

$sql4="CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "year(
  `yearid` int(10) NOT NULL AUTO_INCREMENT,
  `makeid` int(10) NOT NULL DEFAULT '0',
  `modelid` int(10) NOT NULL DEFAULT '0',
  `yearname` varchar(200) NOT NULL,
  PRIMARY KEY (`yearid`))"; 
	mysql_query($sql4,$con);
	
$sql5="CREATE TABLE IF NOT EXISTS " . DB_PREFIX . "filterdata(
  `product_id` int(10) NOT NULL DEFAULT '0',
  `make` int(10) NOT NULL DEFAULT '0',
  `model` int(10) NOT NULL DEFAULT '0',
  `year` int(10) NOT NULL DEFAULT '0')";
	mysql_query($sql5,$con);

?>