<?php

function dbConnect()
{
    $conn = mysqli_connect("localhost:3307", "root", "", "Multivendor");
    return $conn;
}
?>