

<?php



  define("APP_PATH",dirname(__FILE__));




$uri = explode("/",$_SERVER['REQUEST_URI']);


if (count($uri) > 2) {


  if (!empty($_GET)) {
  $query_string = explode("?",$uri[2])[1];
}else{
  $query_string = "";
}

  switch ($uri[1]."/".$uri[2]) {

    case 'admin/login':
    include APP_PATH."/login.php";
    break;

    case 'admin/login?'.$query_string:
    include APP_PATH."/login.php";
    break;

    case 'admin/signup':
    include APP_PATH."/admin_register.php";
    break;

    case 'admin/dashboard':
    include APP_PATH."/admin_dashboard.php";
    break;


    default:
    include APP_PATH."/home.php";
    break;


  }



}else{
  if (!empty($_GET)) {
  $query_string = explode("?",$uri[1])[1];
}else{
  $query_string = "";
}
  // $query_string = explode("?",$uri[1])[1];
  switch ($uri[1]) {

      case 'home':
      include APP_PATH."/home.php";
      break;

      case 'create-post':
      include APP_PATH."/create_post.php";
      break;



      case 'view-news?'.$query_string:
      include APP_PATH."/view_news.php";
      break;

      case 'view-news':
      include APP_PATH."/view_news.php";
      break;


      case 'create-news':
      include APP_PATH."/create_news.php";
      break;

      case 'create-news?'.$query_string:
      include APP_PATH."/create_news.php";
      break;

      case 'manage-news':
      include APP_PATH."/manage_news.php";
      break;

      case 'manage-news?'.$query_string:
      include APP_PATH."/manage_news.php";
      break;

      case 'edit-news?'.$query_string:
      include APP_PATH."/edit_news.php";
      break;

      case 'delete-news?'.$query_string:
      include APP_PATH."/delete_news.php";
      break;

      case 'view-event':
      include APP_PATH."/view_event.php";
      break;
      

       case 'view-event?'.$query_string:
      include APP_PATH."/view_event.php";
      break;

      case 'create-event':
      include APP_PATH."/create_event.php";
      break;

       case 'create-event?'.$query_string:
      include APP_PATH."/create_event.php";
      break;

      case 'edit-event?'.$query_string:
      include APP_PATH."/edit_event.php";
      break;

      case 'delete-event?'.$query_string:
      include APP_PATH."/delete_event.php";
      break;

      case 'manage-event':
      include APP_PATH."/manage_event.php";
      break;

      case 'manage-event?'.$query_string:
      include APP_PATH."/manage_event.php";
      break;

      case 'view-library':
      include APP_PATH."/view_library.php";
      break;
      

       case 'view-library?'.$query_string:
      include APP_PATH."/view_library.php";
      break;

      case 'create-library':
      include APP_PATH."/create_library.php";
      break;

       case 'create-library?'.$query_string:
      include APP_PATH."/create_library.php";
      break;

      case 'edit-library?'.$query_string:
      include APP_PATH."/edit_library.php";
      break;

      case 'delete-library?'.$query_string:
      include APP_PATH."/delete_library.php";
      break;

      case 'manage-library':
      include APP_PATH."/manage_library.php";
      break;

      case 'manage-library?'.$query_string:
      include APP_PATH."/manage_library.php";
      break;
      





      case 'skeleton':
      include APP_PATH."/includes/skeleton.php";
      break;

      case '':
      include APP_PATH."/home.php";
      break;

      case '?'.$query_string:
      include APP_PATH."/home.php";
      break;

      case 'category':
      include APP_PATH."/category.php";
      break;

      case 'category?'.$query_string:
      include APP_PATH."/category.php";
      break;

      case 'about':
      include APP_PATH."/about.php";
      break;

      case 'about?'.$query_string:
      include APP_PATH."/about.php";
      break;

      case 'contact':
      include APP_PATH."/contact.php";
      break;

      case 'contact?'.$query_string:
      include APP_PATH."/contact.php";
      break;

      case 'signup':
      include APP_PATH."/signup.php";
      break;

      case 'signup?'.$query_string:
      include APP_PATH."/signup.php";
      break;

      case 'dashboard':
      include APP_PATH."/dashboard.php";
      break;

      case 'dashboard?'.$query_string:
      include APP_PATH."/dashboard.php";
      break;

      case 'login':
      include APP_PATH."/login.php";
      break;

      case 'login?'.$query_string:
      include APP_PATH."/login.php";
      break;

      case 'services':
      include APP_PATH."/services.php";
      break;

      case 'services?'.$query_string:
      include APP_PATH."/services.php";
      break;

      case 'testimonial':
      include APP_PATH."/testimonial.php";
      break;

      case 'testimonial?'.$query_string:
      include APP_PATH."/testimonial.php";
      break;

      case 'signup2':
      include APP_PATH."/signup2.php";
      break;

      case 'logout':
      include APP_PATH."/logout.php";
      break;

      case 'logout?'.$query_string:
      include APP_PATH."/logout.php";
      break;

      default:
      include APP_PATH."/home.php";
      break;


  }

}










 ?>




<?php

  // $uri = explode("/",$_SERVER['REQUEST_URI']);
//
//   if(isset($_GET)){
//
//   $query = explode("?",$_SERVER['REQUEST_URI']);
//   $query_strings = explode(",",$query);
//   $query_string = explode("=",$query_strings);
// }
//   if(isset($query_string)){
//   $query_strings = explode("&",$query_string[1]);
// }


  // if (isset($query_string)) {
  //
  //   var_dump($query_string);
  //   echo "<br>";
  //   var_dump($query_strings);
  //
  //   // switch ($uri[1]) {
  //   //   case 'home':
  //   //   include APP_PATH."/switch.html";
  //   //   break;
  //   // }
  //
  // }

//   if ($uri > 3) {
//
//   switch ($uri[1]."/".$uri[2]) {
//     case 'home/switch':
//     include APP_PATH."/switch.html";
//     break;
//
//     default:
//       include APP_PATH."/home.php";
//       break;
//   }
// }elseif($uri < 3){


  // switch ($uri[1]) {
  //
  //   case 'home':
  //   include APP_PATH."/home.php";
  //   break;
  //
  //   case 'skeleton':
  //   include APP_PATH."/includes/skeleton.php";
  //   break;
  //
  //   case '':
  //   include APP_PATH."/home.php";
  //   break;
  //
  //   case 'category':
  //   include APP_PATH."/category.php";
  //   break;
  //
  //   case 'about':
  //   include APP_PATH."/about.php";
  //   break;
  //
  //   case 'contact':
  //   include APP_PATH."/contact.php";
  //   break;
  //
  //   case 'signup':
  //   include APP_PATH."/signup.php";
  //   break;
  //
  //   case 'dashboard':
  //   include APP_PATH."/dashboard.php";
  //   break;
  //
  //   case 'login':
  //   include APP_PATH."/login.php";
  //   break;
  //
  //   case 'signup2':
  //   include APP_PATH."/signup2.php";
  //   break;
  //
  //   // default:
  //   //   include APP_PATH."/home.php";
  //   //   break;
  // }
  //

//
// $uri2 = explode("/",$_SERVER['REQUEST_URI']);
// if(isset($uri2[2])){
//   switch ($uri2[1]."/".$uri2[2]) {
//
//     case 'admin/login':
//     include APP_PATH."/admin_login.php?$query";
//     break;
//
//     case 'admin/signup':
//     include APP_PATH."/admin_register.php";
//     break;
//
//     case 'admin/dashboard':
//     include APP_PATH."/admin_dashboard.php";
//     break;
//   }
// }


// }
 ?>
