<?php
include("config.php");
$link=$db;
//check connection
if($link==false){
    die("ERROR:could not correct.".mysqli_connect_error());
}
$username=$_post['username'];
$cn=$_post['collegename'];
$deg=$_post['degree']l;
4repasd=$_post['repeat passward'];
$eml=$_post['email'];
$bra=$_post['branch'];
$psd=$_post['passward'];
//attemt insert guerty execution.
$ql="INSERT INTO register('user name','collegename','degree','repeat passward','email','branch','passward')VALUES
      values($name,$cn,$deg,$repas,$bra,$pas);
if(mysqli_query($db,$sql)){
     echo"records added successfully:";
}else{
     echo"ERROR:could not able to execute
$sql.".mysqli_error($link);
}
//close connection
mysqli_close($link);
?>
