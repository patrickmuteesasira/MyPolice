<?php



session_start();



$con = mysqli_connect('localhost', 'root', '');


mysqli_select_db($con, 'regista');


$code = $_POST['code'];
$pass = $_POST['password'];


$s = "select * from usertable where code = '$code' && password = '$pass'";


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1){
    
    header ('location:panel.php');
}else{
    echo 'Wrong Code or Password!';
}


?>