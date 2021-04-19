<?php
$site_title ="Contact Us";
include 'includes/header.php';
 ?>
    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h1> <?=$site_title?></h1>
              <p><a href="index.html">Home</a> / <span><?=$site_title?></span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->

    <!-- Contact Us Starts Here -->
    <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Your name" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" id="email" placeholder="Your email" required="">
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="Subject">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" id="message" placeholder="Your message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="main-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
          </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>Contact Us</span>
                <h2>Let's keep in touch</h2>
                <p>Keep in touch with us below</p>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <ul>
                    <li><i class="fa fa-phone"></i><br><?=$site_number?></li>
                    <li><i class="fa fa-map-marker"></i><br><?=$site_address?></li>
                  </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                  <ul>
                    <li style=""><i class="fa fa-envelope"></i><br><?=$site_email?></li>
                    <li><i class="fa fa-globe"></i><a href="<?=$site_url?>"><br><?=$site_name?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Us Ends Here -->


    <!-- Map Starts Here -->
    <div id="map">

<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->

      <iframe src="https://maps.google.com/maps?q=Ontario,%20Canada&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="520px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <br><br><br><br>
    <!-- Map Ends Here -->



    <?php
    include 'includes/footer.php';
     ?>

  </body>
</html>
