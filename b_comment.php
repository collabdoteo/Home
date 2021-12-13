<div class="contact-form wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" data-wow-offset="0" style="margin-top: 80px;">
    <h3 class="contact-title">Give your Comments Here</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="contact-form">
                <div class="row">
                    <form name="blog_comment" action="?" method="post">
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

                        <div class="form-group col-md-12">
                            <p>
                                <label for="Message">Message</label>
                                <textarea rows="6" name="message" class="form-control" id="message" required="required"></textarea>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit">Add Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
