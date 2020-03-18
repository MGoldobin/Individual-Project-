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
<body>
    <?php require "blocks/header.php" ?>
    <div class="container">
        <?php
            $fp = fopen("test.txt", "r"); // Открываем файл в режиме чтения
            if ($fp)
            {
            while (!feof($fp))
            {
            $mytext = fgets($fp, 999);
            echo $mytext."<br />";
            }
            }
            else echo "Ошибка при открытии файла";
            fclose($fp);
        ?>
    </div>
    <?php require "blocks/footer.php" ?>
</body>
</html>