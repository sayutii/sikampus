<?php 
    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($result) == 1){
        header('Location: main/index.php');
        $user = mysqli_fetch_array($result);
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['level'] = $user['level'];
        // $_SESSION['nama'] = 'sayuti';
        // $_SESSION['level'] = 'sayuti';
    }
    else if($username == '' || $password == ''){
        header('Location: index.php?error=2');
    }
    else{
        header('Location: index.php?error=1');
    }
?>