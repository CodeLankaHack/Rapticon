<?php 

ini_set('display_errors', 'On');
    $mysql_host = "localhost";
    $mysql_user = "root";
    $mysql_pass = "egodage100";
    $mysql_db = "Sprinty";

    if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db)){
        die("Connection Error");
    }
?>