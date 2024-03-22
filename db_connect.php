<?php

$hostName   = '127.0.0.1';
$userName = 'root';
$password = '';
$databaseName = ' be21_cr4_frankwireko_biglibrary';
$connect = mysqli_connect($hostName,$userName,$password,$databaseName);
if (!$connect){
    die("connection failed");
}