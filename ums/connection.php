<?php 

$connection = mysqli_connect('localhost','root','','php');

//cheking errors
mysqli_connect_error();
if(mysqli_connect_error()){
    die('Database error'.mysqli_connect_error());
}
else{
     echo "done";   
}

?>