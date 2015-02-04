<?php

$dbhost="localhost";//localhost
$dbuser="root";//root
$dbpass="";
$dbname="test";//widget

$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno())
{
  die("error");
}

?>