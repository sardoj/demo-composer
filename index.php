<?php

require __DIR__.'/vendor/autoload.php';

if (empty($_REQUEST['p'])) {
    die("You have give a parameter\n");
}

$page = $_REQUEST['p'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    Page demandée : <?php echo $page; ?><br>
    <?php
        $className = "\\Sardoj\\DemoComposer\\Console\\".$page;

        new $className;
    ?>
</body>
</html>
