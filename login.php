<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>


<body>

    <?php 
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email = $_POST['email'];
        $pwd=$_POST['pwd'];
        if($email=="b231210084@sakarya.edu.tr"&& $pwd=="b231210084"){
            echo "Başarıyla giriş yaptınız!";
        }
        else {
            echo "Kullanıcı adı veya şifre hatalı! ";
        }
        echo "Hoşgeldiniz".$email;
    }
    ?>

</body>
</html>