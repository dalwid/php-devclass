<?php require '../app/functions/pages.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">

    <title>Curso de PHP devclass</title>

</head>

<body>
<div class="container">
    <?php
    try {
        require load();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
</div>
</body>

</html>
