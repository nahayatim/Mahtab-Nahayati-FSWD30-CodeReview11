<?php

  ob_start();
  session_start();

  require_once 'db_connection.php';



  // it will never let you open index(login) page if session is set
  if ( isset($_SESSION['customer'])!="" ) {
    header("Location: home.php");

    exit;
  }

  $error = false;

  if( isset($_POST['btn-login']) ) {

    // prevent sql injections/ clear customer invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    // prevent sql injections / clear customer invalid inputs
    if(empty($email)){

      $error = true;
      $emailError = "Please enter your email address.";

    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {

      $error = true;
      $emailError = "Please enter valid email address.";
    }

    if(empty($pass)){

      $error = true;
      $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {
      $password = hash('sha256', $pass); // password hashing using SHA256

      $res=mysqli_query($conn, "SELECT customer_id, customer_name, customer_pass FROM customer WHERE customer_email='$email'");

      $row=mysqli_fetch_array($res, MYSQLI_ASSOC);

      $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
      if( $count == 1 && $row['customer_pass']==$password ) {

        $_SESSION['customer'] = $row['customer_id'];
        header("Location: home.php");

      } else {

        $errMSG = "Incorrect Credentials, Try again...";

      }
    }
  }

  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login & Registration System</title>

  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes" rel="stylesheet">

  <?php include_once 'css_index.php' ?>
</head>

<body>

  <header id="header" class="">
    <h1>PHP Carrental Agency</h1>
  </header>
 
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-4">
        
      </div>
      <div class="col-lg-5 col-md-5 col-5 offset-lg-5 offset-md-5 col-offset-5" id="box">
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

          
          <a href="register.php">Sign Up Here...</a>
          <hr />

          <?php
            if ( isset($errMSG) ) {
              echo $errMSG; ?>

            <?php
            }

          ?>
          <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />

          <span class="text-danger"><?php echo $emailError; ?></span>

          <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />

          <span class="text-danger"><?php echo $passError; ?></span>

          <hr />

          <button type="submit" name="btn-login" class="btn">Sign In</button>
          
        </form>
           
      </div>
    </div>
  </div>
</body>
</html>
<?php ob_end_flush(); ?>