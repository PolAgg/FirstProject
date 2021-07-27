<?php
session_start();
$firstname = "";
$lastname = "";
$email = "";
$phone = "";
$password1 = "";
$password2 = "";
$errors = array();
//connect to database

$con = mysqli_connect('localhost','root','2005agG2004?');
mysqli_select_db($con,'registration');

//if register button clicked
if(isset($_POST['register'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $s = "select * from users where email ='$email'";
  $result = mysqli_query($con,$s);
  $num = mysqli_num_rows($result);
  if($num ==1){
    array_push($errors,"Email Already In Use");
   }
  $phone = $_POST['phone'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];

  //ensure that form fields are filled
  if(empty($firstname)){
    array_push($errors,"First Name is required");
  }
  if(empty($lastname)){
    array_push($errors,"Last Name is required");
  }
  if(empty($email)){
    array_push($errors,"Email is required");
  }
  if(empty($phone)){
    array_push($errors,"Phone Number is required");
  }
  if(empty($password1)){
    array_push($errors,"Password is required");
  }

  if($password1 != $password2){
    array_push($errors,"Passwords do not match");
  }
  if (count($errors) == 0){
    $password = md5($password1);
    $reg = "INSERT INTO users (firstname,lastname,email,phone,psw)
            VALUES ('$firstname','$lastname','$email','$phone','$password')";
            mysqli_query($con,$reg);
            $_SESSION['username'] = $email;
            $_SESSION['success'] ="You are now logged in";
            header('location:index.php');
  }
}
//user login
if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password1 = $_POST['password1'];
  if(empty($email)){
    array_push($errors,"Email is required");
  }
  if(empty($password1)){
    array_push($errors,"Password is required");
  }
  if (count($errors) == 0){
  $password = md5($password1);
  $s = "select * from users where email ='$email' && psw ='$password'";
  $result = mysqli_query($con,$s);
  $num = mysqli_num_rows($result);
  if($num ==1){
    $_SESSION['username'] = $email;
    $_SESSION['success'] ="You are now logged in";
  header('location:index.php');
   }
  else{
    array_push($errors,"Wrong Credential combination");
  }
 }
}



?>
