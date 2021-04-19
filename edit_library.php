

<?php 
$site_title = "Edit Library";
?>
<title>
<?=$site_title?>
</title>
<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

input[type="submit"] {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}


</style>

<?php

include "includes/db.php";

  $stmtt = $conn->prepare("SELECT * FROM library WHERE id=:id");
      $data = [
        ":id"=>$_GET['id']
      ];
      
      $stmtt->execute($data);

      $row = $stmtt->fetch(PDO::FETCH_BOTH);



if(isset($_POST['submit'])){
  
$target_dir = "library/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$error =[];


  if(empty($_POST['title'])){
    $error['title'] ="Please Kindly Enter Title";
  }
  if(empty($_POST['text'])){
    $error['text'] ="Please Kindly Enter Description";
  }
//   if(empty($_FILES['thumb']['name'])){
//     $error['thumb'] ="Please Upload Thumbnail";
//   }

// Check if image file is a actual image or fake image
if(empty($error)) {



//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 1;

   $stmt = $conn->prepare("UPDATE library SET title=:title, text=:text WHERE id=:id");
      $data = [
        ":title"=>$_POST['title'],
        ":text"=>$_POST['text'],
        ":id"=>$_GET['id']
      ];
      var_dump($data);
      $stmt->execute($data);

    //   header("Location:/dashboard");

    
      header("Location:/view-library?id=".$_GET['id']);
}

// if (!file_exists($target_file)) {

//      $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      $fileName =  $_FILES["fileToUpload"]["name"];
      
      // Insert image file name into database
      $stmt = $conn->prepare("UPDATE library SET title=:title, file=:file, text=:text, WHERE id=:id ");
      $data = [
        ":title"=>$_POST['title'],
        ":file"=>$fileName,
        ":text"=>$_POST['text'],
        ":id"=>$_GET['id']
      ];
      var_dump($data);
      $stmt->execute($data);

      header("Location:/view-library?id=".$_GET['id']);
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}

}
?>

<!DOCTYPE html>
<html>
<body>

<div class="row">
    <div class="col-md-12">
            <form action="" method="post" enctype="multipart/form-data">
            <h1> Sign Up </h1>
                    
                    <fieldset>
                    
                    
                    <label for="name">Title:</label>
                    <input type="text" id="name" name="title" <?php if(isset($row['title'])){?> value="<?=$row['title']?>" <?php }?>>
                    
                    <label>File:</label>
                    
                        <input type="file" name="fileToUpload" >
                    <br>
                
                    
                    <label for="bio">Description:</label>
                    <textarea id="bio" name="text"> <?php if(isset($row['text'])){?> <?=$row['text']?> <?php }?></textarea>
                    
                    
                    
                    </fieldset>
                
                    <input type="submit" name="submit" value="Edit">
                    
            </form>
        </div>
    </div>

</body>
</html>