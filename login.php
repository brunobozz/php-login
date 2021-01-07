<?php 

session_start();
include('connect.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
    header('Location: index.php');
    exit();
} else {
    echo $_POST['user'];
}

$user = mysqli_real_escape_string($connect, $_POST['user']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$query = "select user_id, user_name from user where user_name = '{$user}' and user_password = md5('{$password}')";

$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['user'] = $user;
    header('Location: home.php');
    exit();
} else {
    $_SESSION['not_autenticated'] = true;
    header('Location: index.php');
}

?>