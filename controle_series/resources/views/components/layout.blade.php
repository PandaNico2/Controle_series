<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo asset('css/app.css')?>">
    <title>
        <?php echo $titulo ?>
    </title>
</head>

<body>
    <div class="container">
        <h1><?php echo $titulo ?></h1>
        
        <?php echo $slot ?>
    </div>
</body>

</html>