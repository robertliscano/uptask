<?php

$conn = new mysqli('localhost', 'root', '123456', 'uptask');

if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');
