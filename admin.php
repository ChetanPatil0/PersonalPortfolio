
<?php
session_start();

if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
    $userid = $_SESSION['name'];
} else {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminHomePage</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <h1>ADMIN<h1>
                    <ul>
                        <li><a href="admin.php">Home</a></li>
                        <li><a href="index.php">Portfolio</a></li>
                        <li><a href="">Messages</a></li>
                        <li><a href="add.php">Add Project</a></li>
                    </ul>
                    <h1><a href="logout.php">LOGOUT</a></h1>
        </nav>
    </header>
    <main>
        <table>
            <thead >
                <td style="width:5%; background-color:crimson;">ID</td>
                <td style="width:10%; background-color:crimson;">Title</td>
                <td style="width:35%; background-color:crimson;">Description</td>
                <td style="width:20%; background-color:crimson;">Tech Stack</td>
                <td style="width:5%; background-color:crimson;" >Update/Delete</td>
            </thead>
            <tbody>
                <?php
                include 'conn.php';

                $Query = "SELECT `ProjectID`, `Title`, `Description`, `TechStack` FROM `project`";
                $Result = mysqli_query($conn, $Query);
                if (mysqli_num_rows($Result) == 0) {
                    echo '<h1>No Project Found</h1>';
                } else {
                    while ($Data = mysqli_fetch_assoc($Result)) {
                        ?>
                        <tr>
                            <td><?php echo $Data['ProjectID'] ?> </td>
                            <td ><?php echo $Data['Title'] ?></td>
                            <td style="text-align:justify;"><?php echo $Data['Description'] ?></td>
                            <td><?php echo $Data['TechStack'] ?></td>
                            <td class="button">
                        
                            
                                    <button type="submit" name="Update" href="update.php" ><a href="update.php">Update</a></button>
                                
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="Id" value="<?php echo $Data['ProjectID'] ?>">
                                    <button type="submit" name="Delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php }
                } ?>
            </tbody>
        </table>
    </main>
</body>

</html>