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

<body class="text-center" >
<?php 
    require ('func/connection.php');
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email']))
    {
        $login=$_POST['login'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="INSERT INTO users(login,email,password) VALUES ('$login','$email','$password')";
        $result=mysqli_query($connection, $query);


        if($result){
            $smsg="Регистрация прошла успешно";
        } else {
            $fmsg="Ошибка";
        }
    }
?>
<form class="form-signin" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div> <?php } ?>
    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"><?php echo $fmsg; ?> </div> <?php } ?>
  <input type="text" name="login" class="form-control" placeholder="Login" required>
  <input type="email" name="email" class="form-control" placeholder="Email address" required>
  <input type="password" name="password" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="do_signup">Sign up</button>
  <a class="btn btn-lg btn-primary btn-block" href="signin.php">Уже зарегистрированны?</a>
  <a class="btn btn-lg btn-primary btn-block" href="Main.php">Главная</a>
  <p class="mt-5 mb-3 text-muted">© 2020</p>
</form>
</body>

</html>