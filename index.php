<?php 
    require_once __DIR__ . "/./classes/Customer.php";
    require_once __DIR__ . "/./classes/Staff.php";
?>



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
            $client1->setDelivery(30);
            echo $client1->username;
            var_dump($client1);

            $oldClient = new Customer("granpha", "123", "old@mail.it", "Spain", "Madrid", "SP123XS", "Calle del mar");
            $oldClient->setDelivery(70);
            echo "old user";
            var_dump($oldClient);

            $staffOne = new Staff("staff1", "pass123", "mail@mailcom", "Mario", "Rossi", 3391234566 );
            $staffOne->getWage( "picker" );
            echo $staffOne->getPrefix("M");
            var_dump($staffOne);
        
            $staff2 = new Staff("staff2", "pass123", "staff2@mailcom", "paola", "Neri", 3391234566);
            $staff2->getWage( "manager" );
            echo $staff2->getPrefix("F");
            var_dump($staff2);
        
            $staff3 = new Staff("staff3", "pass123", "staff3@mailcom", "Verde", "Verdi", 3391234566, "driver");
            $staff3->getWage( "driver" );
            echo $staff3->getPrefix("n");
            var_dump($staff3);
        ?>
        
    </body>
</html>