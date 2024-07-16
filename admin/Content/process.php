<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    handleFormData();
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        deleteContent($_GET['id']);
    }
}

function handleFormData() {
    include '../../assets/db/check_admin.php';

    $name = $_POST['name'];
    $description = $_POST['description'];
    $file_name = $_FILES['file']['name'];
    $file_tmp_name = $_FILES['file']['tmp_name'];

    // Move uploaded file to a desired location
    $target_dir = "../../assets/uploads/contents/";
    $target_file = $target_dir . basename($file_name);
    $file_path = "assets/uploads/contents/" . basename($file_name);

    if (move_uploaded_file($file_tmp_name, $target_file)) {
        // Build and execute SQL query
        $query = 'INSERT INTO `contents` (`name`, `description`, `file_path`) 
                  VALUES ("' . $name . '","' . $description . '","' . $file_path . '")';

        executeQuery($query);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

function deleteContent($id) {
    include '../../assets/db/check_admin.php';
    // Retrieve file path before deletion
    $query = 'SELECT `file_path` FROM `contents` WHERE `id`="' . $id . '"';
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $file_path = '../../' . $row['file_path'];
    echo $file_path;
    // Delete record from database
    $query = 'DELETE FROM `contents` WHERE `id`="' . $id . '"';
    // Delete file from server
    unlink($file_path);
    executeQuery($query);
}

function executeQuery($query) {
    include '../../assets/db/check_admin.php';
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>