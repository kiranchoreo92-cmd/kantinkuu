<?php

require_once "config/Database.php";

$db = (new Database())->getConnection();

if ($db) {
    echo "Koneksi database berhasil!";
}