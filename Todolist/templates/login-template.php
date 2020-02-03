<?php include_once "includes/header.php";?>



  <div class="container">
    <div class="show-error"><?php echo $error?></div>  
    <form action="login.php" method="POST" class="login-form">
      <h1 class="form-title text-success text-center">Sign In</h1>
      <div class="form-group">
        <label for="username">Username: </label>
        <input type="text" class="form-control" name="username">
      </div>

      <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" class="form-control" name="password">
      </div>

      <input type="submit" value="Sign-In" name="submit" class="btn btn-success">
      <a href="sign-up.php" class="btn btn-success">Sign-Up</a>
    </form>
  </div>








<?php include_once "includes/footer.php";?>
