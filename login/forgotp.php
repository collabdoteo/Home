<?php include('login_header.php'); ?>

<!-- Forgotp.php starts here -->

        <div class="fxt-content">
			<div class="fxt-header">
				<a href="../index.php" class="fxt-logo"><img src="img/logo.png" alt="Logo" style="width:50%;border-radius: 20px;"></a>
			</div>
			<div class="fxt-form">
				<div class="fxt-transformY-50 fxt-transition-delay-1">
					<p>Recover your password</p>
				</div>
				<form method="POST">
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="fxt-transformY-50 fxt-transition-delay-3">
							<button type="submit" name="submit" class="fxt-btn-fill">Send Me Email</button>
						</div>
					</div>
				</form>
			</div>

			<?php include('login_with.php');?>

            <div class="fxt-footer">
				<div class="fxt-transformY-50 fxt-transition-delay-10">
					<p>Don't have an account?<a href="register.php" class="switcher-text2 inline-text">Register</a></p>
				</div>
			</div>
		</div>

		<!-- Forgotp.php ends here -->


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
    
    // $date = date("Y-m-d H:i:s");
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Kolkata'));

    $fdate = $date->format('Y-m-d H:i:s'); // same format as NOW()

	// $epass = md5($password);

    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO forgotp VALUES ('$fdate', '$email')";

        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if($rs)
        {
            echo '<script>confirm("We have sent you a mail to make a new password.");</script>';
        }
        else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

    }

    mysqli_close($conn);

?>
