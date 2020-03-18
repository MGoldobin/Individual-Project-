<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/pricing.css" rel="stylesheet">
    <link href="css/Style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Montserrat:400,700|Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <input type="text" name="login" class="form-control" placeholder="Login" required>
  <input type="password" name="password" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <a class="btn btn-lg btn-primary btn-block" href="signup.php">Ещё не зарегистрированны?</a>
  <a class="btn btn-lg btn-primary btn-block" href="Main.php">Главная</a>
  <p class="mt-5 mb-3 text-muted">© 2020</p>
</form>

<?php 
    require ('func/connection.php');
    if(isset($_POST['login']) && isset($_POST['password']))
    {
        $login=$_POST['login'];
        $password=$_POST['password'];

        $query="SELECT * FROM users WHERE login='$login' AND password='$password'";
        $result=mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count=mysqli_num_rows($result);
        if($count==1){
            $_SESSION['login']=$login;
        } else{
            $fmsg="Ошибка";
        }
    }

    if(isset($_SESSION['login'])){
        $login=$_SESSION['login'];
        header ('Location: profile.php');
        exit();
    }
?>

</body>

</html>