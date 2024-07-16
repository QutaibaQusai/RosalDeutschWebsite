<?php
session_start();

unset($_SESSION["admin_id"]);
unset($_SESSION["admin_user_name"]);
unset($_SESSION["admin_password"]);

session_destroy();

header("Location:index.php");
?>