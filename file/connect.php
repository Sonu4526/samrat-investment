<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "auction");
$connect=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("database error or connection error");
?>
