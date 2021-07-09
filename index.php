<?php require_once __DIR__ . "/./classes/Customer.php" ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php     
            $client1 = new Customer("UserOne", "***", "mail@mail.it", "Italy", "Rome", 00165, "Via Roma 12" );
            var_dump($client1);
        ?>
        
    </body>
</html>