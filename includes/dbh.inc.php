<?php

$servername = "localhost";
$dBUsrname = "hpatti";
$dBPassword = "Hp@51007058";
$dBName = "pattisparadoxes.com";

$conn = mysqli_connect($servername, $dBUsrname, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}