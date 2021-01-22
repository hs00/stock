<?php


$host = "fnjcdn.cafe24.com";
$user = "fnjcdn";
$pw = "fnjcdn**";
$db = "fnjcdn";

$port = '3306';

function dbConnect($host, $user, $pw, $db, $port): mysqli
{
  $mysqli = new mysqli($host, $user, $pw, $db, $port);
  
  if ($mysqli->connect_error) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  
  return $mysqli;
}

global $dbConn;

$dbConn = dbConnect($host, $user, $pw, $db, $port);
