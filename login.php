<?php 
require 'conn.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `adminlogin` WHERE userid=$userid and password=$password";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
           session_start();
           $row = mysqli_fetch_assoc($result);

            $_SESSION['userid'] = $row['userid'];
            $_SESSION['name'] = $row['name'];

         header("Location: admin.php?status=" . $row['userid']);
    } 
    else {
             echo "<script>
                        alert('Consumer No and Password Not Match'); 
                        window.location.href='login.php'; 
              </script>";  
             
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login page</title>
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
        form {
            border: black solid 3px;
            max-width: 50vh;
            margin: auto;
            border-radius: 5px;
            box-shadow: gray 0px 0px 20px 5px;
        }
        .FormFields {
            padding: 10px 30px 30px 30px;
            display: grid;
        }

        .FormFields label {
            font-weight: bold;
            margin: 10px 0px 2px 0px;
            text-transform: uppercase;
            color: black;
        }

        label>span {
            color: red;
        }

        .FormFields input{
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
    <form action="login.php" method="Post">
            <h2 class="FormTitle">Admin Login</h2>
            <div class="FormFields">
                <label>User Id<span>*</span></label>
                <input type="text" name="userid" required>

                <label>Password<span>*</span></label>
                <input type="password" name="password" required>
                <div class="Buttons">
                    <button type="reset">RESET</button>
                    <button type="submit" name="sumbit">SUBMIT</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>