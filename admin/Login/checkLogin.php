<?php
include '../../assets/db/conn.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_name = $_POST['user_name'];
    $password = md5($_POST['password']);

    $query = 'SELECT * FROM admins WHERE user_name="' . $user_name . '"';
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $user_name && $row['password'] === $password) {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_user_name'] = $row['user_name'];
            $_SESSION['admin_password'] = $row['password'];

            echo json_encode(["success" => true, "location" => "../Dashboard/"]);
        } else {
            echo json_encode(["success" => false, "message" => "Invalid login credentials for Admin."]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "Admin not found."]);
    }

}
?>