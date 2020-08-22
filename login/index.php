<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // it will never let you open index(login) page if session is set
  if ( isset($_SESSION['user'])!="" ) {
    header("Location: ../profile/index.php");
    exit;
  }


	$error = false;

	if( isset($_POST['btn-login']) ) {

		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);

		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs

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

			; // password hashing using SHA256

			$res=mysqli_query($conn,"SELECT * FROM members WHERE m_email='$email'");
			$row=mysqli_fetch_array($res);
			$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

			if( $count == 1 && $row['m_password']==$pass) {
			  echo  $_SESSION['user'] = $row['m_id'];
				header('Location: ../profile/index.php');


			} 
        // else if( $count == 1 && $row['password']==$pass && $row['login']=="User") {
        // echo  $_SESSION['user'] = $row['user_id'];
        // header('Location: ../profile/userprofile.php');


      else {
				$errMSG = "Incorrect Credentials, Try again...";
			}

		}

	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
<noscript>
    <div>
	<h2>&nbsp&nbsp&nbsp JavaScript is disabled! </h2><br>
	<H4>&nbsp&nbsp&nbsp&nbsp&nbsp Please enable JavaScript in your web browser!</H4>
    <div>
	<style type="text/css">
		#main-content { display:none; }
	</style>
</noscript>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../au/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Panel</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
      
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     data-ad-format="fluid"
     data-ad-layout="in-article"
     data-ad-client="ca-pub-2836379775501347"
     data-ad-slot="6894224149"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-3"></div><!--end of col-sm-3-->
    <div class="col-sm-6">
      
        <section class="login-content" >
      <div class="logo">
      </div>
      <div class="login-box " style="height:450px">
        <form method="post" class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
            <?php
      if ( isset($errMSG) ) {

        ?>
        <div class="form-group">
              <div class="alert alert-danger">
        <span class="glyphicon glyphicon-info-sign"></span> <?php //echo $errMSG; ?>
                </div>
              </div>
                <?php
      }
      ?>

          <h3 class="login-head">ADMIN LOGIN</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input type="text" name="email" class="form-control" placeholder="Your Email" value="<?php //echo $email; ?>" maxlength="40"  autofocus/>
          </div>
          <span class="email-danger"><?php //echo $emailError; ?></span>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
          </div>
          <span class="text-danger"><?php //echo $passError; ?></span>
          <div class="form-group">
           
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block" name="btn-login"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
      
      </div>
    </section>
    </div><!--end of col-sm-6-->
    <div class="col-sm-3"></div><!--end of col-sm-3-->
  </div><!--end of row-->
</div><!--end of container--->
<div id="main-content">
    

    </div>
  </body>
  <script src="../au/js/jquery-2.1.4.min.js"></script>
  <script src="../au/js/bootstrap.min.js"></script>
  <script src="../au/js/plugins/pace.min.js"></script>
  <script src="../au/js/main.js"></script>
</html>

