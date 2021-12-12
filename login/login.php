<?php include('login_header.php'); ?>

<!-- Login.php starts here -->

<div class="fxt-content">
			<div class="fxt-header">
				<a href="../index.php" class="fxt-logo"><img src="img/logo.png" alt="Logo" style="width:50%;border-radius: 20px;"></a>
			</div>
			<div class="fxt-form">
				<div class="fxt-transformY-50 fxt-transition-delay-1">
					<p>Log into your account</p>
				</div>
				<form method="POST">
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-3">
							<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
							<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-4">
							<div class="fxt-checkbox-area">
								<div class="checkbox">
									<input id="checkbox1" type="checkbox">
									<label for="checkbox1">Keep me logged in</label>
								</div>
								<a href="forgotp.php" class="switcher-text">Forgot Password</a>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-5">
							<button type="submit" name="submit" class="fxt-btn-fill">Log in</button>
						</div>
					</div>
				</form>
			</div>
			
			<?php include('login_with.php');?>

			<div class="fxt-footer">
				<div class="fxt-transformY-50 fxt-transition-delay-12">
					<p>Don't have an account?<a href="register.php" class="switcher-text2 inline-text">Register</a></p>
				</div>
			</div>
		</div>

<!-- Login.php ends here -->

<?php include('login_footer.php'); ?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


<!-- Adding php for adding comments -->
<?php

    date_default_timezone_set('Asia/Kolkata');

    // include '../connection.php';    
	include '../connection2.php';   

    //get the post records
    
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }
    
    // $date = date("Y-m-d H:i:s");
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Kolkata'));

    $fdate = $date->format('Y-m-d H:i:s'); // same format as NOW()

	$epass = md5($password);

    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO loginp VALUES ('$fdate', '$email', '$epass')";
        // $sql = "INSERT INTO contactus VALUES ('$date', '$name', '$email', '$subject', '$message')";

        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if($rs)
        {
            echo '<script>confirm("Thank You for Logging in.");</script>';
        }
        else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    }

    mysqli_close($conn);

?>
