
<?php
define("DBNAME", "b14_28161263_ontario");
define("DBUSER", "b14_28161263");
define("DBPASS", "ontariodigital");


try{
$conn = new PDO('mysql:host=sql313.byethost14.com;dbname='.DBNAME,DBUSER,DBPASS);

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
echo $e->getMessage();

}
?>

