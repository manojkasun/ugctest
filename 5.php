<?php
$name = $_POST['fName'];
$email = $_POST['email'];
$degree = $_POST['degree'];
$gen = $_POST['gender'];
$pass = $_POST['password'];
$pass2 = $_POST['rPassword'];

if($name == '')
{
    echo "<font style='color:red;'> Name is Empty</font>";
}
if($email == '')
{
    echo "<br><font style='color:red;'> Email is Empty</font>";
}
if($degree == '')
{
    echo "<br><font style='color:red;'> Degree is Empty</font>";
}
if($gen == '')
{
    echo "<br><font style='color:red;'> Gender is Empty</font>";
}
if($pass == '')
{
    echo "<br><font style='color:red;'> Pass is Empty</font>";
}
if($pass != $pass2)
{
    echo "<br><font style='color:red;'> Passwords are not matched</font>";
}
echo $name , "<br>" , $email , "<br>" , $degree , "<br>", $gen , "<br>" , $pass;

