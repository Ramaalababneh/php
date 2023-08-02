<?php  
session_start();
$username = "rama";
$email = "rama@gmail.com";
$password = "12345";

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

if(isset($_POST['username'] ) && isset( $_POST['email']) && isset( $_POST['password'])) //form is full
{
  if($_POST['username'] === $_SESSION['username'] && $_POST['email'] === $_SESSION['email'] && $_POST['password'] === $_SESSION['password'])
   {
    $_SESSION['is_logged_in'] = true;
    header('Location: calculat.php');
   }
   
   else
   {
     echo"invalid login";
     echo"<a href='http://localhost/php/Task2a/login.php'>Please try again.</a>";
    // header('Location: login.php');
   }
}
?>
