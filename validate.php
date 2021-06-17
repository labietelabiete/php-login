<?php

authLogin();

function authLogin()
{
  session_start();

  $email = $_POST["email"];
  $password = $_POST["password"];

  // Database fake info
  $emaildB = "imassembler@assemblerschool.com";
  $passDb = "Assemb13r";
  $passDbHash = password_hash($passDb, PASSWORD_DEFAULT);

  if($email == $emaildB && password_verify($password, $passDbHash))
  {
    $_SESSION["email"] = $email;
    header("Location:./panel.php");
  } else {
    header("Location:./index.php");
  }


}