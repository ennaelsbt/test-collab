<?php
    session_start();
    // checks if user is logged in (login === true) and if not redirects to login:
    if(!isset($_SESSION["login"])) {
        header("LOCATION:awsumforum_login.php"); die();
    }
    // logs out if the user hits logout-button, resets session and redirects
    if(isset($_POST["logout"])){
        $_SESSION["login"] === false;
        unset($_SESSION["username"]);
        session_destroy();
        header("LOCATION:awsumforum_login.php");
     }
?>
<html>
  <head>
    <title>awsum forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
  </head>
  <body>
    <h1>Login success!</h1>
    <div class="container flex-container flex-container--justify-content">
      <div class="flex-container flex-container--column">
        <section class="section-container--white">
          <p>congrats <?php echo $_SESSION['username'] ?> you are in</p>
        </section>
        <form action="" method="post">
          <section class="button-section flex-container flex-container--space-around">
            <input type="submit" value="Sign out" name="logout">
          </section>
        </form>
      </div>
    </div>
  </body>
</html>
