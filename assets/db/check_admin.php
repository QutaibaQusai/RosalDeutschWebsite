<?php
include 'conn.php';
session_start();

if (
    !isset($_SESSION['admin_user_name']) || empty($_SESSION['admin_user_name']) ||
    !isset($_SESSION['admin_password']) || empty($_SESSION['admin_password']) ||
    !isset($_SESSION['admin_id']) || empty($_SESSION['admin_id'])
) {
    header("location: ../Login/index.php");
    exit();
}
?>