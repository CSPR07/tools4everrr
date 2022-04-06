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

            <p>Dit is een website om mijn html/css/php skills te laten zien in praktijk. Je kan op deze website een datum invullen en vervolgens krijg je auto's die in die periode beschikbaar zijn. dit kan je vinden onder het kopje 'bestellen'</p>
        </article>
        
        <article>
        <form id="" method="POST" action="index.php" >
            <input type="search" name="date" value="" placeholder="JJJJ-MM-DD" id="zoeken">
            <input type="submit" value="zoek">
        </form>
        <br>
        <?php
        include_once 'conn.php';
        $conn = new mysqli($servername, $username, $password, $database);
        
            if(isset($_POST["date"]) && !empty($_POST["date"])){
                $_SESSION["date"] = $_POST["date"];
            }
        
        if(isset($_SESSION["date"])){
        
        $sql = "SELECT * FROM auto WHERE datum = '" . $_SESSION["date"] . "'"; 
        $result = $conn->query($sql);
        while($row = $result->fetch_array()){
        echo $row['naam'];
        echo "<br>";
        echo $row['datum'];
        echo "<br>";
        echo "€"; echo $row['prijs'];
        echo "<br>";
        echo $row['brandstof'];
        echo "<br>";
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
