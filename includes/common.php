<?php
$con=mysqli_connect("test1.chaw264c6t0p.us-east-1.rds.amazonaws.com","admin","12345678","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
