<?php

$conn = new mysqli("localhost", "root", "", "database name here");
if ($conn->connect_error) die("connect error: ").$conn->connect_error;

?>