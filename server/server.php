<?php
	$dbhost='localhost:3036';
	$dbuser='root';
	$dbpass='rootpassword';
	$conn=mysql_connect($dbhost, $dbuser, $dbpass)
	if(! $conn){
		die('Could not create database: ' . mysql_error());
	}
	echo 'connected successfully<br />'
	$sql='CREATE DATABASE TUTUORIALS';
	$retval=mysql_query($sql, $conn);
	if(! $retval ) {
            die('Could not create database: ' . mysql_error());
         }
    echo "Database TUTORIALS created successfully\n";
    mysql_close($conn);
?>