<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign up</title>
  <link rel="stylesheet" href="css/login_register.css" type="text/css">
</head>
<body>
<div class="login_register-page">
    <div class="form">
    <div class='login_register-form-text'><h2>Welcome to Students Management System</h2></div>
    <form class="register-form" action="includes/register.inc.php" method="post">
      <input type="text" name="register-id" maxlength="100" placeholder="ID*" required/>
      <input type="text" name="register-name" maxlength="100" placeholder="Name*" required/>
      <input type="text" name="register-surname" maxlength="100" placeholder="Surname*" required/>
      <input type="text" name="register-username" maxlength="100" placeholder="Username*" required/>
      <input type="text" name="register-email1" maxlength="100" placeholder="Email*" required/>
      <input type="text" name="register-email2" maxlength="100" placeholder="Email (again)*" required/>
      <input type="password" name="register-pwd1" maxlength="100" placeholder="Password*" required/>
      <input type="password" name="register-pwd2" maxlength="100" placeholder="Password (again)*" required/>
      <button type="submit" name="register-submit">SIGN UP</button>
      <p class="message">Already registered? <a href="index.php">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>

