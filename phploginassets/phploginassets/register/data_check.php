<?php
session_start();


$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host, $user, $password,$db);
if ($data===false){
    die("Connection failed: " );
}

if (isset($_POST['apply']))
{
   $data_name=$_POST['full_name'] ;
   $data_email=$_POST['email'] ;
   $data_password=$_POST['password'] ;
   $data_gender=$_POST['genter'] ;

   $sql="INSERT INTO user (full_name,email,password,genter) VALUES ('$data_name',$data_email,$data_password,$data_gender)";
   
   $result=  mysqli_query($data,$sql);
  
   if ($result){
    $_SESSION['message']="your apliction sent successful";
    header("location: index.html");
   }
   else{
    echo "apply failed";   }

}
?>