<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tools4ever</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body class="full-height">
<div class="wrapper">
    <header><h1>Tools4ever</h1></header>

    <nav class="grid-container">
        <ul>
            <li>
                <a href="#">Home</a>
                <a href="#">Auto's</a>
                <a href="#">Bestellen</a>
                <a href="#">Ons</a>
            </li>
        </ul>
    </nav>

    <main>
        <article style='margin-top:0px'>
            <h2>Intro website</h2>

            <p>Dit is een website om mijn html, css, php en sql skills te laten zien in praktijk. Je kan op deze website een datum invullen en vervolgens krijg je auto's die in die periode beschikbaar zijn. dit kan je vinden hier onder</p>
        </article>

        <article>

            <form id="" method="POST" action="index.php" >
                <input type="date" name="datehuren" value="datehuren" id="zoeken">
                <input type="submit" value="zoek">
            </form>
            <br>
            <?php
            include_once 'conn.php';
            $conn = new mysqli($servername, $username, $password, $database, $port);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            ?>
            <?php
            if(isset($_POST["datehuren"]) && !empty($_POST["datehuren"])){
                $_SESSION["datehuren"] = $_POST["datehuren"];
            }

            if(isset($_SESSION["datehuren"])){

                $sql = "SELECT auto.naam, autohuren.begindatum, autohuren.einddatum 
                        FROM autohuren 
                        INNER JOIN auto ON autohuren.id = auto.id 
                        WHERE autohuren.begindatum < '" . $_SESSION['datehuren'] . "' 
                        AND autohuren.einddatum > '" . $_SESSION['datehuren'] . "';";
                $result = $conn->query($sql);
                while($row = $result ->fetch_array()){
                    echo "<br> {$row['naam']}".
                    "<br> {$row['begindatum']}". 
                    "<br> {$row['einddatum']}".
                    "<br>".
                    "---------------------------------------";
                }
                $conn-> close();
            }

            ?>
        </article>
    </main>

    <footer>
        <p>©Copyright 2025 by Caspar</p>
    </footer>
</div>

</body>
</html>
