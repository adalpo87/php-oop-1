<?php
require_once __DIR__ ."/User.php";
    require_once __DIR__ ."/Movie.php";
    

    $film1 = new Movie("Ritorno al futuro", "Fantascienza", 180);
    $film2 = new Movie("The departed", "Thriller", 200);
    $film1->setPrezzo(10);
    $film1->lingua = "Inglese";
    


    $user1 = new User("Giuseppe", "Verdi");
    $user2 = new User("Alessandro", "Bianchi");
    $user3 = new User("Mario", "Rossi");

    
    $user1->setAnni(30);
    $user2->setAnni(14);
    $user3->setAnni(86);

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

    <h1>
    TITOLO:  <?php echo $film1->titolo ?>; <br>
    GENERE:  <?php echo $film1->genere ?>; <br>
    DURATA: <?php echo $film1->durata ?>.; <br>
    PREZZO: <?php echo $film1->getPrezzo() ?>; <br>
    LINGUA: <?php echo $film1->lingua ?>
    </h1>

    <p>Film disponibili: <?php echo Movie::getContatore()?> </p>



    <h2>Utenti: <?php echo User::getUtenti() ?> </h2>
    <h3>Utente 1:</h3>
        <ul>
            <li>Nome: <?php echo $user1->nome ?></li>
            <li>Cognome: <?php echo $user1->cognome ?></li>
            <li>Anni <?php echo $user1->anni?></li>
            <li>Euro: <?php echo $user1->getPrezzo() ?></li>
        </ul>
    
    <h3>Utente 2:</h3>
        <ul>
            <li>Nome: <?php echo $user2->nome ?></li>
            <li>Cognome: <?php echo $user2->cognome ?></li>
            <li>Anni <?php echo $user2->anni?></li>
            <li>Euro: <?php echo $user2->getPrezzo() ?></li>
        </ul>


    <h3>Utente 3:</h3>
        <ul>
            <li>Nome: <?php echo $user3->nome ?></li>
            <li>Cognome: <?php echo $user3->cognome ?></li>
            <li>Anni :<?php echo $user3->anni?></li>
            <li>Euro: <?php echo $user3->getPrezzo() ?></li>
        </ul>



</body>
</html>