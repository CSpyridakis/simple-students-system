<?php
    require "includes/header.inc.php";
?>

    <style>
        <?php include 'css/search_students.css'; ?>
    </style>

    <?php
        require "./includes/dbh.inc.php" ;
        if(!isset($_GET['search'])){
            // Prepare query using placeholders (prevent sql injection)
            $sql = "SELECT * FROM Students";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ./Students.php?error=sqlerror");
                exit();
            }

            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        }
        else{
            $searchpattern="%{$_GET['search']}%";
            // Prepare query using placeholders (prevent sql injection)
            $sql = "SELECT * FROM Students WHERE ID LIKE ? OR NAME LIKE ?";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ./Students.php?error=sqlerror");
                exit();
            }

            mysqli_stmt_bind_param($stmt, "ss", $searchpattern, $searchpattern);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        }

    ?>
    <main>
        <div class="main-content">
            <div>
                <div>
                    <form action="" method="GET" >
                        <input type="text" name="search" maxlength="255" placeholder="Search" />
                        <button type="submit" name="search-submit">Search</button>
                    </form>
                </div>
                <div class="card-header">
                    <h2>All Students</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Father</th>
                            <th>Grade</th>
                            <th>Phone Number</th>
                            <th>Birthday</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_array($result)){
                            $id = $row['ID'];
                            $name = $row['NAME'];
                            $surname = $row['SURNAME'];
                            $fathername = $row['FATHERNAME'];
                            $grade = $row['GRADE'];
                            $phone = $row['MOBILENUMBER'];
                            $bday = $row['Birthday'];
                        ?>
                        <tr>
                            <td><?php echo $id;?> </td>
                            <td><?php echo $name;?> </td>
                            <td><?php echo $surname;?> </td>
                            <td><?php echo $fathername;?> </td>
                            <td><?php echo $grade;?> </td>
                            <td><?php echo $phone;?> </td>
                            <td><?php echo $bday;?> </td>
                        <?php    
                        } 
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </main>

<?php
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    require "includes/footer.inc.php";
?>