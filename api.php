<?php
// connection to databse //
$lhost = 'localhost';
$user = 'root';
$pass = '';
$dbase = 'API_DATA'; 
        
$conn = mysqli_connect($lhost, $user, $pass, $dbase);
        
// check connection
        
if ($conn->connect_error){
    die ("Connection failed: " .$conn->connect_error);
        }
        echo '<script> alert ("Connected successfully") </script>';
        mysqli_close($conn);
        

$con = mysqli_connect("localhost", "root", "", "API_DATA");

if($con){
    echo "Database connected successfully";
}


?>
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