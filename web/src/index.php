<?php
// Create connection
// // $conn = new mysql($servername, $username, $password, $dbname);

// // // Check connection
// // if ($conn->connect_error) {
// //     die("Connection failed: " . $conn->connect_error);
// // }

// // // sql to create table
// // // $sql = "CREATE TABLE MyGuests (
// // // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// // // firstname VARCHAR(30) NOT NULL,
// // // lastname VARCHAR(30) NOT NULL,
// // // email VARCHAR(50),
// // // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// // // )";

// // $sql = "SELECT * FROM \'Teachers\'" ;


// // if ($conn->query($sql) === TRUE) {
// //     echo "Table MyGuests created successfully";
// // } else {
// //     echo "Error creating table: " . $conn->error;
// // }

// $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page</title>
  <link rel="stylesheet" href="css/login.css" type="text/css">
  <script type="text/javascript" src="js/login.js"></script>
</head>
<body>
<div class="login-page">
    <div class="form">
    <div class='login-form-text'><h2>Welcome to Students System</h2></div>
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>

