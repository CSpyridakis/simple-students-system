<?php
    require "includes/header.inc.php";
?>

    <style>
        <?php include 'css/edit_students.css'; ?>
    </style>

    <?php
        require "./includes/dbh.inc.php" ;
        // Prepare query using placeholders (prevent sql injection)
        $sql = "SELECT * FROM Students";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ./Students.php?error=sqlerror");
            exit();
        }

        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        /* // There are not students to delete
        if (!$row = mysqli_fetch_array($result)){
            header("Location: ./Students.php?error=emptystudents");
            exit();
        } */
    ?>
    <main>
        <div class="main-content">
            <div>
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
                            <td><?php echo $id;?></td>
                            <td><input type="text" size="10" name="edit-student-name" maxlength="255" placeholder="Name*" value="<?php echo $name;?>" required pattern="[A-Za-z]+" title="Could contain only latin characters."/></td>
                            <td><input type="text" size="10" name="edit-student-surname" maxlength="255" placeholder="Surname*" value="<?php echo $surname;?>" required pattern="[A-Za-z]+" title="Could contain only latin characters."/></td>
                            <td><input type="text" size="10" name="edit-student-fathername" maxlength="255" placeholder="Father's Name*" value="<?php echo $fathername;?>" required pattern="[A-Za-z]+" title="Could contain only latin characters."/></td>
                            <td><input type="number" size="10" name="edit-student-grade" placeholder="Grade*" required min="0" value="<?php echo $grade;?>" step="0.01" title="Could be a floating point number."/></td>
                            <td><input type="text" size="10" name="edit-student-mobile" maxlength="255" placeholder="Mobile*" value="<?php echo $phone;?>" required pattern="[+0-9\-\(\) ]{10,20}" title="Could contain only numbers, space, dash and parentesis."/></td>
                            <td><input type="date" size="10" name="edit-student-birthday" placeholder="Birthday*" value="<?php echo $bday;?>" required title="Could be date."/>
                            <td><a onclick="return confirm('Are you sure you want to edit this entry?')" href="/includes/editstudent.inc.php?id=<?=$id?>&name=<?=$name?>&surname=<?=$surname?>&fathername=<?=$fathername?>&grade=<?=$grade?>&phone=<?=$phone?>&bday=<?=$bday?>" class='btn'>Edit</a></td>
                        </tr>
                        <?php    
                        } 
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php
    require "includes/footer.inc.php";
?>