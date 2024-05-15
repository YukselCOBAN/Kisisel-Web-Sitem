
<?php

ob_start();

   $user = "b231210084@sakarya.edu.tr";

   $pass = 'b231210084';

   if(isset($_POST['username']))
   {

      $username = $_POST['username'];
      $password = $_POST['password'];

      if($username == $user && $password == $pass){
      echo "Hoşgeldiniz"." ".$password." "."giriş işlemi başarılı.";
       }

    else{

      header("location:login.html");

    }

   }

?>
 