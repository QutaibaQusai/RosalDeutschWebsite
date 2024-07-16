<?php
include 'conn.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["table"]) && isset($_POST["field"]) && isset($_POST["value"]) && isset($_POST["exclude_id"])) {
  $table = $_POST["table"];
  $field = $_POST["field"];
  $value = $_POST["value"];
  $excludeId = $_POST["exclude_id"];

  $query = "SELECT COUNT(*) as count FROM `$table` WHERE `$field`='$value' AND `id` != '$excludeId'";
  $result = mysqli_query($conn, $query);

  if ($result) {
    $row = mysqli_fetch_assoc($result);
    $count = intval($row["count"]);

    echo $count > 0 ? 'true' : 'false';
  } else {
    echo 'false'; 
  }
} else {
  echo 'false';
}
?>