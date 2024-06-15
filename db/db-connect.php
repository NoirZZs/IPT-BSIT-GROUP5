<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='schedule';

$conn = new mysqli('localhost', 'root', '','schedule');
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}