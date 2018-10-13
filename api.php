<?php
$hp2k1_host = "localhost";
$hp2k1_user = "xxx";
$hp2k1_pass = "xxx";
$hp2k1_dbname = "Bot";

$connection = mysql_connect($hp2k1_host,$hp2k1_user,$hp2k1_pass);
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($hp2k1_dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
$sql = 'SELECT id, url FROM girl';
$sqlrandom ='SELECT url FROM girl order by RAND()';
$hp2k1_go = mysql_query( $sqlrandom, $connection );
if(!$hp2k1_go ) {
      die('Could not get data: ' . mysql_error());
   }
$row = mysql_fetch_array($hp2k1_go, MYSQL_NUM);
echo '{ "messages": [ { "attachment": { "type": "image", "payload": { "url": "';
echo $row[0];
echo '" } } },{ "text": "<3", "quick_replies": [ { "title":"Xem tiếp!!!", "block_names":["HP2k1", "girl"] } ] } ] }';
?>