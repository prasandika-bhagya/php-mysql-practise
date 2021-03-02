<?php require_once('inc/connection.php');?>

<?php 

$first_name ='Bhagya';
$last_name='Prasandika';
$email='prasandikabhagya@gmail.com';
$password='abcd1234';
$is_delete='0';

#0 for not deleted and 1 for deleted
$hashed_password = sha1($password);
#used sha1 to store password as encrypted one in db

$query = "INSERT INTO user(first_name,last_name,email,password,is_delete) VALUES ('{$first_name}','{$last_name}','{$email}','{$password}','{$is_delete}')";

$result=mysqli_query($connection,$query);

if($result){
    echo "added";
}
else{
    echo "error";
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>








   
    
</body>
</html>



<?php mysqli_close($connection); ?>