<?php 
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $error = "";
    $success = "";

    if (isset($_POST['submit'])) {
          if ($uname == "admin") {
             if ($pass == "sonu") {
              
               $success = "Welcome Admin";
               //redirect to another page on successfull login
              header('Location:admin.php');
             }
             else{
              $error = "Invalid Password !!";
              $success = "";
             }
          }
          else{
              $error = "Invalid Username !!";
             
          }
    }
    
  ?>
<link rel="stylesheet" type="text/css" href="css/log.css">
<!------ Include the above in your HEAD tag ---------->


<form method="post">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" />
      <h1>Admin Login</h1>
      <p class="error"><?php echo $error;  ?></p><p class="success"><?php echo $success;  ?></p>
    </div>

    <!-- Login Form -->
    
      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="username" required>
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password" required>
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
   

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Go to the Site</a>
    </div>

  </div>
</div>
</form>