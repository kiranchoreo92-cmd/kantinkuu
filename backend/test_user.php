<?php

require_once "config/Database.php";
require_once "models/User.php";

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$result = $user->register(
    "siswa_test",
    "123456",
    "Siswa Test",
    "081234567890"
);

if ($result) {
    echo "Register berhasil!";
}