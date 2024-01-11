<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'bellinghamhotel');

if(!$con){
    die("Connection Error: ".mysqli_connect_error);
}
?>