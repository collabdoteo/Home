<?php include('login_header.php'); ?>

<!-- Register.php starts here -->

<div class="fxt-content">
			<div class="fxt-header">
				<a href="../index.php" class="fxt-logo"><img src="img/logo.png" alt="Logo" style="width:50%;border-radius: 20px;"></a>
			</div>
			<div class="fxt-form">
				<div class="fxt-transformY-50 fxt-transition-delay-1">
					<p>Register for new account</p>
				</div>
				<form method="POST">
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input type="text" id="firstname" class="form-control" name="firstname" placeholder="First Name" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input type="text" id="lastname" class="form-control" name="lastname" placeholder="Last Name">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-3">
							<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-4">
							<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
							<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-5">
							<button type="submit" name="submit" class="fxt-btn-fill">Register</button>
						</div>
					</div>
				</form>
			</div>

			<?php include('login_with.php');?>

			<div class="fxt-footer">
				<div class="fxt-transformY-50 fxt-transition-delay-12">
					<p>Already have an account? <a href="login.php" class="switcher-text2">Login</a></p>
				</div>
			</div>
		</div>

<!-- Register.php ends here -->

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
	if(isset($_POST['firstname'])){
        $firstname = $_POST['firstname'];
    }
    if(isset($_POST['lastname'])){
        $lastname = $_POST['lastname'];
    }
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
        $sql = "INSERT INTO register VALUES ('$fdate', '$firstname', '$lastname','$email', '$epass')";

        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if($rs)
        {
            echo '<script>confirm("Thank You for Registering.");</script>';
        }
        else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    }

    mysqli_close($conn);

?>
