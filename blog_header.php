<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Our goal since then at Collab.eo has been to make life easy for our beloved content creators. We are building a platform for our content creators which can support them full time.">
    <meta name="keywords" content="collab.eo, collaborator, content, creator, collab, consumer">
    <!-- PAGE TITLE -->
    <!-- <title>Collab.eo &#8211; Where we grow together</title> -->
    <title> <?php echo($title);?></title> 
    <!-- FAVI ICON -->
    <link rel="icon" type="image/png" href="assets/images/favi4.png" sizes="32x32">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <script src="https://kit.fontawesome.com/f6e5e8a8fd.js" crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-9F7RTYSZH9"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-9F7RTYSZH9');
        </script>

</head>

<body>
    <!-- START PRELOADER -->
    <!-- <div class="preloader">
        <div class="status">
            <div class="status-mes"></div>
        </div>
    </div> -->
    <!-- / END PRELOADER -->

    <!-- START HOMEPAGE DESIGN AREA -->
    <header class="single-blog-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                            <a href="index.php">
                                <p><img src="assets/images/logo_trimmed.png" style="width: 120px;border-radius: 10px;" ></p>
                            </a>
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div>
                    <div class="col-md-9">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
									<ul class="nav navbar-nav navbar-right">
                                        <li><a class="smoth-scroll" href="index.php">Home</a></li>
                                        <li><a class="smoth-scroll" href="index.php#about">About</a></li>
										<li <?php if ($title == 'Collab.eo &#8211; Blog') { ?>class="active"<?php } ?>><a class="smoth-scroll" href="blogs.php">Blog</a></li>
                                        <li <?php if ($title == 'Collab.eo &#8211; Contacts') { ?>class="active"<?php } ?>><a class="smoth-scroll" href="contact.php">contact</a></li>
                                        <li><a class="smoth-scroll" href="login/login.php" target="_blank">Sign In</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
