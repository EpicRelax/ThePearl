<?php
require "../../../bd.php";
    if(isset($_POST["submit"])){
        $insertionC = $pdo->prepare("INSERT INTO clients(prenom,nom,mail,tel ) values(:prenom,:nom,:mail,:tel)");
        $insertionC->execute(
            [
                "prenom"=>$_POST["prenom"],
                "nom"=>$_POST["nom"],
                "mail"=>$_POST["mail"],
                "tel"=>$_POST["tel"],
                //"id_clients"=>
            ]
            );

        $insertionR = $pdo->prepare("INSERT INTO reservation(date_arrivee,date_depart,nbr_persons,id_clients) values(:date_arrivee,:date_depart,:nbr_persons,(SELECT id_clients FROM clients ORDER BY id_clients DESC LIMIT 1))");
        $insertionR->execute(
            [
                "date_arrivee"=>$_POST["date_arrivee"],
                "date_depart"=>$_POST["date_depart"],
                "nbr_persons"=>$_POST["nbr_persons"],
            ]
            );
        
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reservation.css">
    <title>The Pearl - Contact</title>
</head>

<body>
    <header>
        <div id="nav">
            <nav>
                <div id="navImg">
                    <img src="../../img/logo.png" alt="Logo Pearl">
                </div>
                <ul>
                    <a href="../../../index.php">
                        <li>HOME</li>
                    </a>
                    <a href="">
                        <li>SUITES</li>
                    </a>
                    <a href="">
                        <li>ACTIVITIES</li>
                    </a>
                    <a href="reservation.php">
                        <li>RESÉRVATION</li>
                    </a>
                    <a href="../Contact/contact.php">
                        <li>CONTACT</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section id="contact">
            <h2>Resérvation</h2>
            <hr>
            <div id="formContact">
                <div id="contactImg">
                    <img src="../../img/logo.png" alt="Logo Pearl">
                </div>
                <form action="" method="post">
                    <div id="formWrap">
                        <div class="med">
                            <input type="text" placeholder="First Name" name="prenom">
                            <hr>
                        </div>
                        <div class="med">
                            <input type="text" placeholder="Last Name" name="nom">
                            <hr>
                        </div>
                        <div class="med">
                            <input type="email" placeholder="Email" name="mail">
                            <hr>
                        </div>
                        <div class="med">
                            <input type="tel" placeholder="Number Phone" name="tel">
                            <hr>
                        </div>
                    </div>
                    <div id="formMess">
                        <div>
                            <input type="number" placeholder="Number of Personne" name="nbr_persons">
                            <hr>
                        </div>
                        <div>
                            <input class="date" type="date" name="date_arrivee">
                            <hr>
                        </div>
                        <div>
                            <input class="date" type="date" name="date_depart">
                            <hr>
                        </div>
                        <div>
                            <input type="submit" value="SEND" name="submit">
                        </div>
                    </div>
                </form>
            </div>

        </section>
    </main>
</body>
</html>