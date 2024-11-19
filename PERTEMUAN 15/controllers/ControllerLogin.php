<?php 
include "../models/database.php";

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'
    AND password='$password'
    ";

    $result = $db->query($sql);

    if($result->num_rows > 0) {
        header('Location:http://localhost/latihanphp/pertemuan-15/crud-latihan/utama.php');
    }else {
        header('Location:http://localhost/latihanphp/pertemuan-15/crud-latihan/index_error.php');
    }
}
?>