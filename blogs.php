<?php $title = "Collab.eo &#8211; Blog"; ?>

<!-- Header file -->
<?php include('header2.php'); ?>


        <div class="single-blog-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Recent Blogs</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START BLOG DESIGN AREA -->
    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <!-- <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our Latest Blogs</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div> -->
            <div class="row" style="margin-top: 30px;margin-bottom: 50px;">

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

            <div class="row" style="margin-top: 30px;margin-bottom: 50px;">
                
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <?php include 'blogs/b2.php'; ?>
                </div>
                
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <?php include 'blogs/b1.php'; ?>
                </div>

                <!-- <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <?php //include 'blogs/b3.php'; ?>
                </div> -->

                     
            </div>

        </div>
    </section>
    <!-- / END BLOG DESIGN AREA -->

<!-- Footer file -->
<?php include('footer.php'); ?>