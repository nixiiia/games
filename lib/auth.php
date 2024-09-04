<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($login) < 2) {
    echo "Login error";
    exit;
}
if (strlen($password) < 2) {
    echo "Password error";
    exit;
}

$salt = '2%^%^%6^*896&^#$%&&%%&9)(8&^&^4577';
$password = md5($salt . $password);

require "db.php";

$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

if ($query->rowCount() == 0)
    echo "There is no such user...";
else {
    setcookie('login', $login, time() + 3600 * 24 * 30, "/");
    header('Location: /user.php');
}
