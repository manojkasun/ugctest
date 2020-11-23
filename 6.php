<?php
$file_name = $_FILES["myFile"]["name"];
$file_size = $_FILES["myFile"]["size"];
$file_type = $_FILES["myFile"]["type"];
$temp_name = $_FILES["myFile"]["tmp_name"];
$path = move_uploaded_file($temp_name, "J:/Web/TU7/UGC/new/" . $file_name);

if($path == true)
{
    echo "Success<br><br>";

}
else{
    echo "Fail<br><br>";
}


echo $file_name , "<br>", $file_type , "<br>" , $file_size;
