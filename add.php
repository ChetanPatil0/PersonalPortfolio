<?php
include 'conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title = $_POST['ptitle'];
    $Description = $_POST['PDescription'];
    $TechStack = $_POST['PTechstack'];
    $CodeLink = $_POST['pcodelink'];
    $ProjectIOLink = $_POST['poutputlink'];

    // echo '<script>alert("Failed To Add  "); window.location.href="add.php";</script>';
    echo `<script>alert('$Title');</script>`;
    
    $Query = "INSERT INTO project (ProjectId,Title, Description, TechStack, CodeLink, ProjectIOLink) VALUES ('','$Title', '$Description', '$TechStack', '$CodeLink', '$ProjectIOLink')";
    $Result = mysqli_query($conn, $Query);


        if ($Result) {
            echo '<script>alert("Project Add Successfully"); window.location.href="admin.php";</script>';
        } else {
            // echo '<script>alert("Failed To Add Project,Fill form Again"); window.location.href="add.php";</script>';
            $error = mysqli_error($conn);
             echo '<script>alert("Failed To Add Project: ' . $error . '"); window.location.href="add.php";</script>';
             }
        

    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project ADD Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        main {
            width: 100%;
            margin-top: 10vh;
        }

        .FormTitle {
            text-transform: uppercase;
            text-align: center;
            padding: 10px 5px;
            background-color: crimson;
        }

        .ProjectAddForm {
            border: black solid 3px;
            max-width: 60vh;
            margin: auto;
            border-radius: 5px;
            box-shadow: gray 0px 0px 20px 5px;
        }

        .FormFields {
            padding: 10px 30px 30px 30px;
            display: grid;
        }

        .FormFields>label {
            font-weight: bold;
            margin: 10px 0px 2px 0px;
            text-transform: uppercase;
            color: black;
        }

        label>span {
            color: red;
        }

        .FormFields input,
        textarea {
            font-size: 20px;
            padding: 5px;
        }

        .Buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .Buttons>button {
            padding: 5px 15px;
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
        }

        .Buttons>button:nth-child(1) {
            background-color: crimson;
            color: #fff;
            border-radius: 5px;
            border: 3px solid crimson;
        }

        .Buttons>button:nth-child(1):hover {
            color: crimson;
            background-color: #fff;
        }

        .Buttons>button:nth-child(2) {
            background-color: green;
            color: #fff;
            border-radius: 5px;
            border: 3px solid green;
        }

        .Buttons>button:nth-child(2):hover {
            color: green;
            background-color: #fff;
        }
    </style>
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
                    <h1>LOGOUT</h1>
        </nav>
    </header>
    <main>

        <form action="add.php" method="Post" class="ProjectAddForm">
            <h2 class="FormTitle">Add New Project</h2>
            <div class="FormFields">
                <label for="ptitle">Project Title <span>*</span></label>
                <input type="text" name="ptitle" required>

                <label for="pdescription">Project Description<span>*</span></label>
                <textarea type="text" name="PDescription" rows="5" required></textarea>

                <label for="ptechstack">Project TechStack<span>*</span></label>
                <input type="text" name="PTechstack" required>

                <label for="pcodelink">Project Code Link<span>*</span></label>
                <input type="text" name="pcodelink" required>

                <label for="poutputlink">Project Output Link<span>*</span></label>
                <input type="text" name="poutputlink" required>

                <div class="Buttons">
                    <button type="reset">RESET</button>
                    <button type="submit" name="sumbit">SUBMIT</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>