<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == '1234') {
        $_SESSION['username'] = $username;

        setcookie('last_login', date('Y-m-d H:i:s'), time() + 3600);

        header("Location: profile.php");
        exit();
    } else {
        echo "Неправильний логін або пароль";
    }
}
?>

<form method="POST">
    <label>Логін:</label>
    <input type="text" name="username"><br><br>

    <label>Пароль:</label>
    <input type="password" name="password"><br><br>

    <button type="submit">Увійти</button>
</form>