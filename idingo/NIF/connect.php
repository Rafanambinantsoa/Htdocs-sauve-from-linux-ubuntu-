<?php

$con = mysqli_connect("localhost", "root", "", "Stage");

if (!$con) {
  die("Connection Error" . mysqli_connect_Error());
}