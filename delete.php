<?php
include 'conn.php';


if (isset($_POST['Id']) && !empty($_POST['Id'])) {
    $Id = $_POST['Id']; 

   
    $Query = "DELETE FROM `Project` WHERE `ProjectId` = $Id";
    $Result = mysqli_query($conn, $Query);


    if ($Result) {
        echo '<script>alert("Project Deleted Successfully"); window.location.href="admin.php";</script>';
    } else {
        echo '<script>alert("Failed To deleting Project"); window.location.href="admin.php";</script>';
    }
} else {
    echo '<script>alert("Failded To Delete,Wrong Id"); window.location.href="admin.php";</script>';
}

mysqli_close($conn);
?>
