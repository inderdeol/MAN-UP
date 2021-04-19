<?php
$site_title ="About Us";
include 'includes/header.php';
 ?>
     <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

              <h1><?=$site_title?></h1>
              <p><a href="index.html">Home</a> / <span><?=$site_title?></span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- About Us Starts Here -->
    <div class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-image">
              <img src="assets/images/our-team.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>About Us</span>
                <h2>Our Company</h2>
                <p>  <?=$site_about?>.</p>
              </div>
              <div id='tabs'>
                  <ul>
                    <li><a href='#tabs-1'>Our History</a></li>
                    <li><a href='#tabs-2'>Our Goal</a></li>
                    <!----<li><a href='#tabs-3'>Our Network</a></li>---->
                  </ul>
                  <section class='tabs-content'>
                    <article id='tabs-1'>
                      <p>Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada a, commodo vitae lectus. Integer volutpat sapien in arcu fringilla, ac eleifend est facilisis.
                      <br><br>Phasellus finibus lacus eu scelerisque rutrum. Duis purus eros, blandit ultricies iaculis in, commodo quis lacus. Pellentesque interdum varius enim nec accumsan.</p>
                    </article>
                    <article id='tabs-2'>
                      <p>Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis. Duis sit amet nibh non sapien tincidunt bibendum. Curabitur rutrum justo id leo ornare, suscipit lobortis augue volutpat.
                      <br><br>Sed ligula arcu, interdum eu magna eget, tristique aliquet nibh. Aenean sodales justo vitae ex pharetra, vitae tincidunt dolor condimentum. Cras vel mattis risus.</p>
                    </article>
                    <article id='tabs-3'>
                      <p>Fusce in semper velit, at tempus augue. Morbi quis auctor ipsum, ut accumsan neque. Vivamus dapibus ipsum placerat ante commodo, eget suscipit tortor hendrerit. Quisque lacinia sed velit et maximus.
                      <br><br>Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus. Vestibulum et lorem non erat efficitur iaculis ut nec nibh. Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui.</p>
                    </article>
                  </section>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Us Ends Here -->


    <!-- Team Starts Here -->
    <div class="team-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="section-heading">
              <span>Our Team</span>
              <h2>Meet the greatest people</h2>
              <p>Our greatest team have got you covered in making your brand products go viral over the internet</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="assets/images/dummy.png" alt="">
              <div class="down-content">
                <h4>Kapil  Chauhan</h4>
                <span>Project Manager</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="assets/images/dummy.png" alt="">
              <div class="down-content">
                <h4>Inderpreet Doel</h4>
                <span>Full-Stack Developer</span>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="assets/images/dummy.png" alt="">
              <div class="down-content">
                <h4>Lavanya Saini</h4>
                <span>Front-End Developer</span>
              </div>
            </div>
          </div>

           <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-item">
              <img src="assets/images/dummy.png" alt="">
              <div class="down-content">
                <h4>Akashdeep Gill</h4>
                <span>Back-End Developer</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Team Ends Here -->


    <?php
    include 'includes/footer.php';
     ?>
  </body>
</html>
