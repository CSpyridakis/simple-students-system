<?php
    session_start();

    if (!isset($_SESSION["Username"])){
        header("Location: ../index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo "<title>".substr(basename($_SERVER['PHP_SELF']),0,-4)."</title>"; ?>
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <!-- <link rel="stylesheet" href="../css/main.css" type="text/css"> -->
</head>
<body>
    <header>
        <nav class ="menubar">
            <ul>
                <li><div class="left"><a href="Teachers.php">Home</a></div></li>
                <li><div class="left"><a href="AddStudent.php">Add</a></div></li>
                <li><div class="left"><a href="EditStudent.php">Edit</a></div></li>
                <li><div class="left"><a href="DeleteStudent.php">Delete</a></div></li>
                <li>
                    <div class="left wrap search-div">
                        <form class="search-form search" action="">
                            <input type="text" name="searchTerm" placeholder="Search">
                            <button type="submit" class="searchButton">Search</button>
                        </form>
                    </div>
                </li>
                <li><div class="nav-user right">USERNAME</div></li>
                <li><div class="nav-logout right"><a href="/includes/logout.inc.php">Logout</a></div></li>
            </ul>
        </nav>
    </header>