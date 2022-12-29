<?php 
$con = mysqli_connect('127.0.0.1', 'root', '', 'less26');

$select = "SELECT * FROM users WHERE phone='{$_POST['phone']}' AND password='{$_POST['password']}'";

$query = mysqli_query($con, $select );


if($query->num_rows>0){
	header("Location: account.php");
}
else{
	header("Location: index.php?error=нет такого пользователя или пароль введен не верно");
}	

 ?>
