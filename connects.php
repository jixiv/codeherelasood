<?php

$conn = mysqli_connect("localhost", "root", "", "ced_4");

if (!$conn) {
    echo "Connection Failed";
}