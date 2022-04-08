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
        $servername = "localhost";
        $username = "id18739086_root";
        $password = "GxkC1N4Mx!Hh&--^";
        $database = "id18739086_tools4ever";
        $conn = new mysqli($servername, $username, $password, $database);
        
        
            if(isset($_POST["datehuren"]) && !empty($_POST["datehuren"])){
                $_SESSION["datehuren"] = $_POST["datehuren"];
            }
        
        if(isset($_SESSION["datehuren"])){
        
        $sql = "SELECT auto.naam Naamauto, autohuren.begindatum Begindate, autohuren.einddatum Einddate FROM auto INNER JOIN autohuren ON auto.id = autohuren.id WHERE Begindate < '" . $_SESSION['datehuren'] . "' AND Einddate > '" . $_SESSION['datehuren'] . "'";
        $result = $conn->query($sql);
        while($row = $result ->fetch_array()){
        echo "<br>";
        echo $row['Naamauto'];
        echo "<br>";
        echo $row['Begindate'];
        echo "<br>";
        echo $row['Einddate'];
        echo "<br>";
        echo "---------------------------------------";
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
<?php


?>
