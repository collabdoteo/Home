<?php $title = "Collab.eo &#8211; Coming Soon"; ?>

<!-- Header file -->
<?php include('header2.php'); ?>

        
        <div class="single-blog-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                         <!-- style="margin-top: 15%;margin-bottom: 15%;"> -->
                        <h2>Coming Soon</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Join us to know more!</h2>
                        <h4 style="text-align: center;margin-top: 20px;margin-bottom: 20px;" >Score a few passes for our exclusive launch event.</h4>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row contact-form-design-area wow fadeInUp">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="row">
                            <form action="" method="post">
                                <div class="form-group col-md-6">
                                    <p>
                                        <label for="name">Name</label>    
                                        <input type="text" name="name" class="form-control" id="name" required="required">
                                    </p>
                                </div>
                                <div class="form-group col-md-6">
                                    <p>
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" required="required">
                                    </p>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="submit">Send Message</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- /END  CONTACT DETAILS DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->

<!-- Footer file -->
<?php include('footer.php'); ?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<!-- Adding php for adding comments -->
<?php

// include 'add.php';

    include 'connection2.php';    

    //get the post records
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }

    // $date = date("Y-m-d H:i:s");
    $date = new DateTime();
    $date->setTimezone(new DateTimeZone('Asia/Kolkata'));

    $fdate = $date->format('Y-m-d H:i:s'); // same format as NOW()


    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO joinus VALUES ('$fdate', '$name', '$email')";
        // $sql = "INSERT INTO contactus VALUES ('$date', '$name', '$email', '$subject', '$message')";

        // insert in database 
        $rs = mysqli_query($conn, $sql);

        if($rs)
        {
            echo '<script>confirm("Thank You for showing your interest. We will keep you posted.");</script>';
        }
        else {
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    } 

    mysqli_close($conn);
?>