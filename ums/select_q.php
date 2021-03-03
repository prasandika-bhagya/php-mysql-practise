<?php require_once('inc/connection.php');?>

// echo "</pre>";

// $records= mysqli_fetch_assoc($resul_t);
// echo "<pre>";
// print_r($records);
// echo "</pre>";

//can do same thing by while loop
$table ='<table>';
$table .= '<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>';

while($records=mysqli_fetch_assoc($resul_t)){
   // echo $records['first_name'] . "<br>". "<br>";
    

    $table .= '<tr>';
    $table .= '<td>' . $records['first_name'] .'</td>';
    $table .= '<td>' . $records['last_name'] .'</td>';
    $table .= '<td>' . $records['email'] .'</td>';
    $table .= '</tr>';
}
$table .='</table>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>td,th{border:3px solid black;}</style>
</head>
<body>
  <?php echo $table; ?>
</body>
</html>



<?php mysqli_close($connection); ?>