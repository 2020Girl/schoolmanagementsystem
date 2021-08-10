<?php require_once "includes/header.php"; ?>

<?php require_once "includes/banner.php" ?>

<div class="about-section section-padding admission-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4><strong>Our Address</strong></h4>
                <?php echo get_school_address(); ?>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6797.275979987075!2d74.46239144710098!3d31.58897371416049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391911e64a7da0df%3A0x79a0ea1668a0b9b7!2sBata%20Pur%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1616523830602!5m2!1sen!2s" width="100%"  height="400" frameborder="0" style="border:0" allowfullscreen style="border:0;" allowfullscreen="" loading="lazy"> </iframe>
             </div>
            <div class="col-md-6">
                <h4><strong>Submit this form to contact us:</strong></h4>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Your Name</label>
                        <input type="text" name="your-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Your Mobile Number</label>
                        <input type="text" name="your-phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Your Message</label>
                        <textarea name="your-message" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="contact-form" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>