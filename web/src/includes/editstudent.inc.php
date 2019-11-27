<?php
    require "dbh.inc.php" ;

    $uid = $_GET['id'];
    $uname = $_GET['name'];
    $usname = $_GET['surname'];
    $ufather = $_GET['fathername'];
    $ugrade = $_GET['grade'];
    $uphone = $_GET['phone'];
    $ubdate = $_GET['bday'];

    // Check and in backend if register fields are acceptable
    if (empty($uid) || empty($uname) || empty($usname) || empty($ufather) || empty($ugrade) || empty($uphone) || empty($ubdate)){
        header("Location: ../EditStudent.php?error=emptyfields");
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]+$/", $uid)){
        header("Location: ../EditStudent.php?error=notvalidid");
        exit();
    }
    else if (!preg_match("/^[a-zA-Z]+$/", $uname)){
        header("Location: ../EditStudent.php?error=notvalidname");
        exit();
    }
    else if (!preg_match("/^[a-zA-Z]+$/", $usname)){
        header("Location: ../EditStudent.php?error=notvalidsurname");
        exit();
    }
    else if (!preg_match("/^[A-Za-z]+$/", $ufather)){
        header("Location: ../EditStudent.php?error=notvalidusername");
        exit();
    }
    else if (!preg_match("/^[+0-9\-\(\) ]{10,20}$/", $uphone)){
        header("Location: ../EditStudent.php?error=notvalidusername");
        exit();
    }

    // Prepare query using placeholders (prevent sql injection)
    $sql = "UPDATE Students SET NAME = ? , SURNAME = ? , FATHERNAME = ? , GRADE = ? , MOBILENUMBER = ?  WHERE ID = ? LIMIT 1;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../EditStudent.php?error=sqlerror");
        exit();
    }

    // Pass parameters and execute statement 
    mysqli_stmt_bind_param($stmt, "ssssss", $uname, $usname, $ufather, $ugrade, $uphone, $uid);
    mysqli_stmt_execute($stmt);

    if(mysqli_stmt_affected_rows($stmt)){
        header("Location: ../EditStudent.php?edited=true");
        exit();
    }
    else{
        // echo mysqli_error($conn);
        header("Location: ../EditStudent.php?edited=false");
        exit();
    }

    // Close connections
    mysqli_stmt_close($stmt);
    mysqli_close($conn);