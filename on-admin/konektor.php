<?php
#database variables
ini_set('display_errors',FALSE);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "belibaru1";
$entries=1;

$db = mysql_connect($dbhost,$dbuser,$dbpass);
$tanggal=date('D, d-M-Y H:i:s');
if (!mysql_select_db($dbname,$db)) {
	echo mysql_error();
}

?>