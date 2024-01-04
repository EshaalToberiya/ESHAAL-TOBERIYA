<?php

$conn = mysqli_connect('localhost','root','','songsphere');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>