<?php
  session_start();

  $errorMsg = "";
  $validUser = $_SESSION["login"] === true; // checks if user has logged in?

  if(isset($_POST["loginSubmit"])) {
      $_SESSION["username"] = $_POST["user"];
      $validUser = $_POST["user"] == "admin" && $_POST["userPassword"] == "password";
      if(!$validUser) {
          $errorMsg = "<p class=\"error-message\"><strong>Whoopsie!</strong><br>You have entered an invalid username or password</p>";
        } else {
          $_SESSION["login"] = true;
        }
  }
  if($validUser) { // same as $validUser == true, doesn't check the type
      header("Location: awsumforum.php"); die();
  }
?>
<html>
  <head>
    <title>awsum forum</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
 <h1 style="color:blue;">This is a Blue Heading</h1>
     <h1>Just do it!</h1>
    <div class="container flex-container flex-container--justify-content">
      <section class="section-container--white">
        <form name="input" action="" method="post">
          <h2>Welcome</h2>
          <div class="error">
            <?php echo $errorMsg ?>
          </div>
          <section class="login-section">
            <input  type="text" value="<?php $_POST["username"] ?>" id="username" name="user" placeholder="Username">
            <input  type="password" value="" id="password" name="userPassword" placeholder="Password">
            <section class="button-section flex-container flex-container--justify-content">
              <input type="submit" value="Login" name="loginSubmit">
            </section>
          </section>
        </form>
      </section>
    </div>
  </body>
</html>
