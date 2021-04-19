
    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>About Us</h2>
              </div>
              <p>
              <?=truncate($site_about, 125)?> <a href="/about" style="color:white; font-weight:bold;"> Read more</a>
              </p>
            </div>
          </div>

          <!-- <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Hosting Plans</h2>
              </div>
              <ul class="footer-list">
                <li><a href="#">Basic Cloud 5X</a></li>
                <li><a href="#">Cloud VPS 10X</a></li>
                <li><a href="#">Advanced Cloud</a></li>
                <li><a href="#">Custom Designs</a></li>
                <li><a href="#">Special Solutions</a></li>
              </ul>
            </div>
          </div> -->


          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Useful Links</h2>
              </div>
              <ul class="footer-list">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/testimonial">Testimonials</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/view-news">Our News</a></li>
                <li><a href="/view-event">Our Events</a></li>
                <li><a href="/view-library">Our Library</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="footer-item">
              <div class="footer-heading">
                <h2>Contact Us</h2>
              </div>
              <ul class="footer-list">
                <li>Phone: <a href="#"><?=$site_number?></a></li>
                <li>Email: <a href="#"><?=$site_email?></a></li>
                <li>Website: <a href="/"><?=$site_name?></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="sub-footer">

                    <div class="text-center center-block">
                          <a href="https://www.facebook.com/" style="margin:10px"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                          <a href="https://twitter.com/" style="margin:10px"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                          <a href="https://instagram.com/manupontario" style="margin:10px"><i id="social-gp" class="fa fa-instagram fa-3x social"></i></a>
                          <a href="mailto:<?=$site_email?>" style="margin:10px"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                    </div>
                    <br><br>

              <p>Copyright &copy;  <?= date("Y"); ?> <?=$site_name?>
				- Designed by <?=$project?></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }

      function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
