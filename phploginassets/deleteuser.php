<?php
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db); // this is to connect the page to the database
if($_GET['email'])
{
    $email=$_GET['email'];
    $sql="DELETE FROM users WHERE email='$email'";
    $result=mysqli_query($data,$sql);

    if($result)
    {
        echo "<script>alert('user deleted successfully')</script>";
        echo "<script>window.location.href='view_user.php'</script>";
    }
    else
    {
        echo "<script>alert('user not deleted')</script>";
        echo "<script>window.location.href='view_users.php'</script>";

}

}
?>