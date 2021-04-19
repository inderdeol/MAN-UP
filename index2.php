 <?php
// if (header("Location:http://192.168.33.11/home")) {
// include 'home.php';
// }
  $uri = explode("/",$_SERVER['REQUEST_URI']);

var_dump($uri);
  switch ($uri[1]) {

    case 'home':
    include "view/home.php";
    break;

    case 'about':
    include "view/about.php";
    break;

    case 'contact':
    include "view/contact.php";
    break;

    case 'products':
    include "view/products.php";
    break;

    case 'testimonial':
    include "view/testimonial.php";
    break;

    default:
      include "view/home.php";
      break;
  }



 ?>
