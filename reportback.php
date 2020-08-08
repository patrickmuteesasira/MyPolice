<?php



session_start();





$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'regista');

$name = $_POST['name'];
$place = $_POST['place'];
$tel = $_POST['tel'];
$gender = $_POST['gender'];
$case = $_POST['case'];




$reg = "insert into reportcase(name, place_residence,tel, gender, case_file) values ('$name', '$place','$tel', '$gender', '$case')";
    mysqli_query($con, $reg);
    
    header('location:report.php');
?>