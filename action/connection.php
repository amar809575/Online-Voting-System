<?php

$con = mysqli_connect("localhost", "root", "", "voters");
if (!$con) {
    die(mysqli_connect_error($con));
}
