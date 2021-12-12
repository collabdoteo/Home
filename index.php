<?php $title = "Collab.eo &#8211; Where we grow together"; ?>

<!-- Header file -->
<?php include('header.php'); ?>

        <div class="welcome-image-area" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <h2 style="margin-bottom: 80px;">Where we grow together</h2>

                                    <div class="ex-wrap">
                                        <button class="pulse-button" type="button">
                                            <a class=""  href="comingsoon.php" style="color: white; padding: 25px 10px 25px 10px;">Explore Around The World</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    	
	<!-- START SERVICES BOX DESIGN AREA -->
	<section class="intro-service-box" style="padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="intro-single-service-box">
                        <i class="far fa-handshake"></i>
                        <h3>Collaborators</h3>
						<p>You are an artist or, a creator who is looking to collaborate with domain experts across the Digital Art Space.</p>
                    </div>
                </div>
                
                <style>
                    .fa-handshake {
                        background-image: url("assets/images/deal.png");
                    }
                </style>


				<div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="intro-single-service-box no-right-border">
                        <i class="fa fa-group"></i>
                        <h3>Partners</h3>
						<p>You are a creator/ an expert who wants to support Collaborator in making something magical for their portfolios.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- / END CONTAINER -->
    </section>
	<!-- / END SERVICES BOX DESIGN AREA -->

    <?php include 'about.php'; ?>

    <!-- START BLOG DESIGN AREA -->
    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our Latest Blogs</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="row" style="">
                                
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <?php include 'blogs/b5.php'; ?>
                </div>

                
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <?php include 'blogs/b4.php'; ?>
                </div>
                
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <?php include 'blogs/b3.php'; ?>
                </div>
                
            </div>
        </div>
    </section>
    <!-- / END BLOG DESIGN AREA -->

<!-- Footer file -->
<?php include('footer.php'); ?>