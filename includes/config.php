<?php

ob_start();
session_start();

// db properties
define('DBHOST','localhost');
define('DBUSER','sypeeps');
define('DBPASS','s4f4r1*');
define('DBNAME','sypeeps');

// make a connection to mysql here
$conn = @mysql_connect (DBHOST, DBUSER, DBPASS);
$conn = @mysql_select_db (DBNAME);
if(!$conn){
	die( "Sorry! There seems to be a problem connecting to our database.");
}

// define site path
define('DIR','http://ipads.sypartners.com/');

// define admin site path
define('DIRADMIN','http://ipads.sypartners.com/admin/');

// define site title for top of the browser
define('SITETITLE','SY/Partners');

//define include checker
define('included', 1);

include('functions.php');


?>


