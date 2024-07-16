<?php
include '../assets/db/conn.php';

$searchTerm = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$searchFields = ['name', 'description'];

$query = "SELECT * FROM contents";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) :
?>
    <tr>
        <td><?= $row["name"] ?></td>
        <td><?= $row["description"] ?></td>
        <td>
            <a href="../<?= $row["file_path"] ?>" download>تنزيل</a> 
        </td>
    </tr>
<?php
endwhile;

?>