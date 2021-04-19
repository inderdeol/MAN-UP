

<?php

session_start();
$site_name ="Man Up";
$site_email = "man.up.ontario@outlook.com";
$site_number ="+1 234 567 890";
$site_address = "101, Ontario, Canada";
$site_url ="/";
$site_about_short ="The ManUp Initiative was first started in 2015 at the Longfields-Davidson High School by a group of young men who wanted to make a difference in how women within their communities are treated. Their goal is to teach positive masculinity principles, along with bystander intervention practices. ";
$site_about ="The ManUp Initiative was first started in 2015 at the Longfields-Davidson High School by a group of young men who wanted to make a difference in how women within their communities are treated. Their goal is to teach positive masculinity principles, along with bystander intervention practices. 

The creators of the ManUp program wanted to encourage other men to adopt and replicate their program to help make a difference within their own schools and communities. Their hope was that in doing so they can drive down the impact and instance of sexual and domestic abuse within their communities. Since 2015, the ManUp program has been implemented in 30 different high schools in the Ottawa area.

Currently Georgian College Orillia Campus in collaboration with the Centre for Changemaking and Social Innovation and the Ontario Provincial Police (OPP) have been working to develop a ManUp pilot in this region. The goal is to prototype a framework and infrastructure to ultimately expand this program across Ontario and engage secondary and post-secondary schools as partners in an effort to help end violence against women. It’s vision is by empowering male students to help redefine what it is to “be a man” they will take a leadership role in speaking out against inappropriate behaviour from their peers.";
$project="Ontario Digital";



function shortenString($string, $your_desired_width) {
  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
  $parts_count = count($parts);

  $length = 0;
  $last_part = 0;
  for (; $last_part < $parts_count; ++$last_part) {
    $length += strlen($parts[$last_part]);
    if ($length > $your_desired_width) { break; }
  }

  return implode(array_slice($parts, 0, $last_part));
}


function truncate($str, $width) {
    return strtok(wordwrap($str, $width, "...\n"), "\n");
}
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}    
    </style>

    <title>
<?php if ($site_title === "Home"): ?>
  <?=$site_name?>
<?php else: ?>
  <?=$site_name ." | ". $site_title?>
<?php endif; ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  </head>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/605e08a2067c2605c0bc9e4b/1f1nl3f45';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="" >
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="/assets/images/logo.png" width="70px" height="50px" alt="" style="display:inline-block">
            <h2 style="display:inline">Man <em>Up</em></h2>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/testimonial">Testimonials</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>

              </li>
                   

              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
        <?php if(isset($_SESSION['id'])){?>
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">Dashboard</a>
              </li>
        <?php }elseif(!isset($_SESSION['id'])){?>

              <li class="nav-item">
                <a class="nav-link" href="/admin/login">Login</a>
              </li>
        <?php }?>

            </ul>
          </div>
    
             <!-- <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                <div id="myDropdown" class="dropdown-content" style="z-index:10;">
                    <a href="#" style="">Link 1</a>
                    <a href="#" style="">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
              </div> -->

               
          <!-- <div class="functional-buttons">
            <ul>
              <li><a href="#">Log in</a></li>
              <li><a href="#">Sign Up</a></li>
            </ul>
          </div> -->
        </div>
      </nav>
    </header>

