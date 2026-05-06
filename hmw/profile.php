<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<h1>Вітаємо, <?php echo $username; ?>!</h1>

<p>
Останній вхід:
<?php
if (isset($_COOKIE['last_login'])) {
    echo $_COOKIE['last_login'];
} else {
    echo "Немає даних";
}
?>
</p>

<a href="logout.php">Вийти</a>