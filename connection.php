<?php 

$dbhost = "sql5.freesqldatabase.com";
$dbuser = "sql5527366";
$dbpass = "1XDTJWhtly";
$dbname = "sql5527366";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect to database. Sorry bro.");
}