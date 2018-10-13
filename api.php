<?php
$hp2k1_host = "localhost";
$hp2k1_user = "xxx";
$hp2k1_pass = "xxx";
$hp2k1_dbname = "Bot";

$connection = mysqli_connect($hp2k1_host,$hp2k1_user,$hp2k1_pass,$hp2k1_dbname);
if (!$connection)
  {
  die('Could not connect: ' . mysqli_error());
  }


$sql = 'SELECT id, url FROM girl';
$sqlrandom ='SELECT url FROM girl order by RAND()';
$hp2k1_go = mysqli_query($connection, $sqlrandom);
if(!$hp2k1_go ) {
      die('Could not get data: ' . mysqli_error());
   }
$row = mysqli_fetch_array($hp2k1_go, MYSQLI_NUM);
echo '{ "messages": [ { "attachment": { "type": "image", "payload": { "url": "';
echo $row[0];
echo '" } } },{ "text": "<3", "quick_replies": [ { "title":"Xem tiếp!!!", "block_names":["HP2k1", "girl"] } ] } ] }';

?>