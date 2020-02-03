 
 <?php include_once "includes/header.php";?>

</head>
<body>

 
 <div class="container">
    <div class="show-error"><?php echo $error?></div>  
    <form action="sign-up.php" method="POST" class="login-form">
      <h1 class="form-title text-success text-center">Sign Up</h1>
       <div class="form-group">
        <label for="firstname">Firstname: </label>
        <input type="text" class="form-control" name="firstname">
      </div>
       <div class="form-group">
        <label for="lastname">Lastname: </label>
        <input type="text" class="form-control" name="lastname">
      </div>
      <div class="form-group">
        <label for="username">Username: </label>
        <input type="text" class="form-control" name="username">
      </div>

      <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" class="form-control" name="password">
      </div>

      <input type="submit" value="Sign-Up" name="sign-up" class="btn btn-success">
    </form>
  </div>


<?php include_once "includes/footer.php";?>