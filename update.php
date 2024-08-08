<?php
require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Title = $_POST['ptitle'];
    $Description = $_POST['description'];
    $TechStack = $_POST['techstack'];
    $CodeLink = $_POST['codelink'];
    $ProjectIOLink = $_POST['outputlink'];
    $updateParts = [];

    if (!empty($Title)) {
        $updateParts[] = "`Title` = '{$Title}'";
    }
    if (!empty($Description)) {
        $updateParts[] = "`Description` = '{$Description}'";
    }
    if (!empty($TechStack)) {
        $updateParts[] = "`TechStack` = '{$TechStack}'";
    }
    if (!empty($CodeLink)) {
        $updateParts[] = "`CodeLink` = '{$CodeLink}'";
    }
    if (!empty($ProjectIOLink)) {
        $updateParts[] = "`ProjectIOLink` = '{$ProjectIOLink}'";
    }

    if (empty($updateParts)) {
        echo "No fields to update.";
        exit;
    }
  
    if (isset($_POST['Id']) && !empty($_POST['Id'])) {
        $ProjectId = $_POST['Id']; 
    }
        $ProjectId=7;

    $setClause = implode(', ', $updateParts);
    $Query = "UPDATE `Project` SET {$setClause} WHERE `ProjectId` = 7";


    $Result = mysqli_query($conn, $Query);


    if ($Result) {
        echo '<script>alert("Project Update Successfully"); window.location.href="admin.php";</script>';
    } else {
        $error = mysqli_error($conn);
        echo '<script>alert("Failed To Update Project: ' . $error . '"); window.location.href="update.php";</script>';
    }


    mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Update Page</title>
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

        .TitleLabel,
        .DescriptionLabel,
        .TechStackLabel,
        .CodeLinkLabel,
        .ProjectIOLinkLabel {
            display: none;
        }


        .FormFields label {
            font-weight: bold;
            margin: 10px 0px 2px 0px;
            text-transform: uppercase;
            color: black;
        }

        label span {
            color: red;
        }

        .OperationType {
            text-align: center;
        }

        .OperationType input {
            margin: 0px 2px 5px 15px;
        }

        .FormFields input {
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
                    <h1><a href="logout.php">LOGOUT</a></h1>
        </nav>
    </header>
    <main>

        <form action="update.php" method="Post" class="ProjectAddForm">
            <h2 class="FormTitle">Update Project </h2>
            <div class="FormFields">
                <label for="updatetype" style="text-align:center">What You Want To Update</label><br>
                <div class="OperationType">
                    <input type="checkbox" name="updatetype" value="Title" id="Box1"><label
                        for="updatetype">Title</label>
                    <input type="checkbox" name="updatetype" value="Description" id="Box2"><label
                        for="updatetype">Description</label>
                    <input type="checkbox" name="updatetype" value="TechStack" id="Box3"><label
                        for="updatetype">TechStack</label><br>
                    <input type="checkbox" name="updatetype" value="CodeLink" id="Box4"><label
                        for="updatetype">CodeLink</label>
                    <input type="checkbox" name="updatetype" value="ProjectIOLink" id="Box5"><label
                        for="updatetype">OutputLink</label>
                </div>
                <div class="TitleLabel">
                    <label for="ptitle">Project Title <span>*</span></label>
                    <input type="text" name="ptitle" class="Title">
                </div>
                <div class="DescriptionLabel">
                    <label for="description">Project Description<span>*</span></label>
                    <textarea type="text" name="description" rows="5" class="Description"></textarea>
                </div>
                <div class="TechStackLabel">
                    <label for="techstack">Project TechStack<span>*</span></label>
                    <input type="text" name="techstack" class="TechStack">
                </div>
                <div class="CodeLinkLabel">
                    <label for="codelink">Project Code Link<span>*</span></label>
                    <input type="text" name="codelink" class="CodeLink">
                </div>
                <div class="ProjectIOLinkLabel">
                    <label for="outputlink">Project Output Link<span>*</span></label>
                    <input type="text" name="outputlink" class="ProjectIOLink">
                </div>
                <div class="Buttons">
                    <button type="reset">RESET</button>
                    <button type="submit" name="sumbit">SUBMIT</button>
                </div>
            </div>
        </form>
    </main>
    <script>
        let TitleLabel = document.querySelector('.TitleLabel');
        let DescriptionLabel = document.querySelector('.DescriptionLabel');
        let TechStackLabel = document.querySelector('.TechStackLabel');
        let CodeLinkLabel = document.querySelector('.CodeLinkLabel');
        let ProjectIOLinkLabel = document.querySelector('.ProjectIOLinkLabel');

        //check box
        let OperationType = document.querySelector('.OperationType');

        OperationType.addEventListener('click', function (e) {
            if (e.target.value == 'Title') {
                TitleLabel.style.display = "contents";
            }
            else if (e.target.value == 'Description') {
                DescriptionLabel.style.display = "contents";
            }
            else if (e.target.value == 'TechStack') {
                TechStackLabel.style.display = "contents";
            }
            else if (e.target.value == 'CodeLink') {
                CodeLinkLabel.style.display = "contents";
            }
            else if (e.target.value == 'ProjectIOLink') {
                ProjectIOLinkLabel.style.display = "contents";
            }
            else {
                console.log("Wrong Input");
            }
        }
        );



    </script>
</body>
</html>