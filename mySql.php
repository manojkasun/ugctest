<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "ugcTest2";

$con = mysqli_connect($host, $user, $password, $db);

if($con == false)
{
    echo "Connection error!!!!";
    return 0;
}
else{
    echo "Connection Success";
}
