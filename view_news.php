<style>

/* Eric Meyer's Reset CSS v2.0 - http://cssreset.com */
div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}


.bacon-blog-post {
  position: relative;
  width: 100%;
  background: #fff;
  font-weight: 400;
  line-height: 1.45;
}

.bacon-blog-post-inner { padding: 42px; }

.bacon-blog-post .wp-post-image {
  width: 100%;
  height: auto;
}

.bacon-blog-post h1, .bacon-blog-post h2, .bacon-blog-post h3, .bacon-blog-post h4 {
  margin: 1.414em 0 0.5em;
  font-weight: 700;
  line-height: 1.2;
  font-family: Open Sans, sans-serif;
}

.bacon-blog-post h1 a, .bacon-blog-post h2 a, .bacon-blog-post h3 a, .bacon-blog-post h4 a {
  display: inline-block;
  color: #000;
  text-decoration: none;
}

.bacon-blog-post h1 {
  margin-top: 0;
  font-size: 3.157em;
}

.bacon-blog-post h2 { margin-top: 0; font-size: 2.369em;}
.bacon-blog-post h3 {font-size: 1.777em;}
.bacon-blog-post h4 {font-size: 1.333em;}
.bacon-blog-post small, .bacon-blog-post .font_small {font-size: 0.75em;}

.bacon-blog-post p, .bacon-blog-post p a {
  font-family: Lora, Times New Roman, serif;
  font-size: 20px;
  line-height: 28px;
}

.bacon-blog-post p { margin-bottom: 1.3em; }
.bacon-blog-post p:last-child { margin-bottom: 0; }
.bacon-blog-post p a { color: #B21A13; }

.bacon-blog-post blockquote {
  margin: 1.3em;
  padding-left: 1.3em;
  border-left: rgb(224,40,43) solid 0.25em;
  font-style: italic;
}

.bacon-shadow:after {
  position: absolute;
  content: "";
  left: 20px;
  right: 20px;
  bottom: 0px;
  z-index: -1;
  box-shadow: 0 0 30px 4px rgba(0,0,0,0.60);
}

</style>


<?php 
$site_title = "News";
include "includes/header.php";
include "includes/db.php"

?>

<?php 


 $statement = $conn->prepare("SELECT * FROM news WHERE id=:id");
 $statement->bindParam(":id",$_GET['id']);
 $statement->execute();
 $row = $statement->fetch(PDO::FETCH_BOTH);

 $stmt = $conn->prepare("SELECT * FROM news");
 $stmt->execute();





?>


   <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="header-text caption">
             <h2><?=$site_name?></h2>
             <p> <?php 
             echo $site_title; 
             if(isset($row['title'])){
                 echo " - ".$row['title'];
                 }
             
             ?> 
             </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    <br><br>
<?php 

if(isset($_GET['id'])){
?>
<div style="width: 710px; margin: 0 auto;>
  <div class="bacon-blog-post bacon-shadow">
    <img src="/uploads/<?=$row['thumb']?>" class="wp-post-image" width="100%">
    <div class="bacon-blog-post-inner">
      <h2><?=$row['title']?></h2>
        <hr>
      <p><?=$row['text']?></p>
    </div>
  </div>
</div>
<?php }elseif($stmt->rowCount() > 0){
    while($news = $stmt->fetch(PDO::FETCH_BOTH)){
    ?>


<div style="width: 710px; margin: 0 auto;>
  <div class="bacon-blog-post bacon-shadow">
    <img src="/uploads/<?=$news['thumb']?>" class="wp-post-image" width="100%">
    <div class="bacon-blog-post-inner">
      <h2><a href="view-news?id=<?=$news['id']?>"><?=$news['title']?></a></h2>
        <hr>
    </div>
  </div>
</div>
<?php   }

    }else{?>

    <div style="width: 710px; margin: 0 auto;>
  <div class="bacon-blog-post bacon-shadow">
    
    <div class="bacon-blog-post-inner">
      <h2>NO Post Now</h2>
        
    </div>
  </div>
</div>

    <?php }?>


<?php 

include "includes/footer.php"

?>