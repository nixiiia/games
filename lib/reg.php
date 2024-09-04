<?php
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($login) < 2) {
    echo "Login error";
    exit;
}
if (strlen($username) < 2) {
    echo "Name error";
    exit;
}
if (strlen($email) < 2 && str_contains($email, '@')) {
    echo "Email error";
    exit;
}
if (strlen($password) < 2) {
    echo "Password error";
    exit;
}

$salt = '2%^%^%6^*896&^#$%&&%%&9)(8&^&^4577';
$password = md5($salt . $password);

require "db.php";

$sql = 'INSERT INTO users(login, username, email, password) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $username, $email, $password]);

header('Location: /');
