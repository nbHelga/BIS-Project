<?php
session_start();

// Contoh username dan password statis untuk simulasi login
$correct_username = "mahasiswa@gmail.com";
$correct_password = "pw123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $correct_username && $password == $correct_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
?>
