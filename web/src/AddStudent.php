<?php
    require "includes/header.inc.php";
?>

    <style>
        <?php include 'css/add_students.css'; ?>
    </style>

    <main>
        <!-- <div class="main-content"> -->
            <?php
                if($_GET['error'] == "sqlerror"){
                echo "<script>alert('There is something wrong with the database');</script>";
                }
                else if($_GET['error'] == "userexists"){
                echo "<script>alert('ID, Username or Email already exists!');</script>";
                }
            ?>
            <div class="add-user-page">
                <div class="form">
                <div class='add-user-form-text'><h2>Add new Student</h2></div>
                <form name="add-user-form" class="add-user-form" onsubmit="return validateForm()" action="includes/register.inc.php"  method="post">
                <input type="text" name="add-user-id" maxlength="255" placeholder="ID*" required pattern="[A-Za-z0-9]+" title="Could contain only latin characters and numbers."/>
                <input type="text" name="add-user-name" maxlength="255" placeholder="Name*" required pattern="[A-Za-z]+" title="Could contain only latin characters."/>
                <input type="text" name="add-user-surname" maxlength="255" placeholder="Surname*" required pattern="[A-Za-z]+" title="Could contain only latin characters."/>
                <input type="text" name="add-user-username" maxlength="255" placeholder="Username*" required pattern="[A-Za-z0-9_]+" title="Could contain only latin characters, numbers and underscore."/>
                <input type="email" name="add-user-email1" maxlength="255" placeholder="Email*" title="Please enter an acceptable email. E.g: joe-smith_2@email.com" required pattern="[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                <input type="email" name="add-user-email2" maxlength="255" placeholder="Email (again)*" title="Please enter an acceptable email. E.g: joe-smith_2@email.com" required pattern="[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                <input type="password" name="add-user-pwd1" maxlength="50" placeholder="Password*" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                <input type="password" name="add-user-pwd2" maxlength="50" placeholder="Password (again)*" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                <button type="submit" name="add-user-submit">ADD</button>
                </form>
            </div>
            </div>
        <!-- </div> -->
    </main>

<?php
    require "includes/footer.inc.php";
?>