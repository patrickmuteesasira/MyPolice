<?php



session_start();





$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'regista');

$name = $_POST['name'];
$pass = $_POST['pass'];
$code = $_POST['code'];
$sex = $_POST['gender'];


$s = "select * from usertable where name = '$name' && code ='$code'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken or Code";
}else{
    $reg = "insert into usertable(name, code, password, sex) values ('$name', '$code', '$pass', '$sex')";
    mysqli_query($con, $reg);
    echo "Registration Successfull <a href='index.php'>Login</a> ";
}


?>