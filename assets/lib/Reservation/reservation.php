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
                <form action="">
                    <div id="formWrap">
                        <div class="med">
                            <input type="text" placeholder="First Name" name="firstName">
                            <hr>
                        </div>
                        <div class="med">
                            <input type="text" placeholder="Last Name" name="lastName">
                            <hr>
                        </div>
                        <div class="med">
                            <input type="email" placeholder="Email" name="email">
                            <hr>
                        </div>
                        <div class="med">
                            <input type="tel" placeholder="Number Phone" name="tel">
                            <hr>
                        </div>
                    </div>
                    <div id="formMess">
                        <div>
                            <input type="number" placeholder="Number of Personne" name="number">
                            <hr>
                        </div>
                        <div>
                            <input class="date" type="date" name="dateEntree">
                            <hr>
                        </div>
                        <div>
                            <input class="date" type="date" name="dateSortie">
                            <hr>
                        </div>
                        <div>
                            <input git statustype="submit" value="SEND" name="submit">
                        </div>
                    </div>
                </form>
            </div>

        </section>
    </main>
</body>
</html>