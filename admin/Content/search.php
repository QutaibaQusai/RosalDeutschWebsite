<?php
include '../../assets/db/check_admin.php';

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
            <a href="#" class="delete-button" data-id="<?= $row["id"] ?>">Delete</a>
            <a href="../../<?= $row["file_path"] ?>" download>download</a> <!-- Added download link for file -->
        </td>
    </tr>
<?php
endwhile;

include '../php/footer.php';
?>