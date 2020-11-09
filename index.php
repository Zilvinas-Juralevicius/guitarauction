<?php
    require_once __DIR__ . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8"/>
    <title>Gitarų aukcionas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dizainas/layout.css">
    <link rel="stylesheet" href="dizainas/dizainas.css">
    <link rel="stylesheet" href="dizainas/elementai.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('img/guitar.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;"
>
<header>
<div></div>
    <h1 class="first">Gitarų aukcionas</h1>
</header>

<aside>
    <nav>
    <div class="topnav">
            <div class="form-popup" id="myForm">
            <form action="/index.php" class="form-container">
                <h1>Prisijunk</h1>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" class="btn">Login</button>
                <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
            <a class="open-button" onclick="openForm()">Prisijunk</a>

        <a href="#reg">Registruokis</a>
        <a href="index.php">Pagrindinis puslapis</a>
        <a href="puslapiai/naujienos.html">Naujienos</a>
        <a href="puslapiai/gitaros.php">Gitaros</a>
        <a href="puslapiai/kontaktai.html">Kontaktai</a>
        <a href="puslapiai/apiemus.html">Apie mus</a>
        <div class="search-container">
            <form action="/.">
                <input type="text" placeholder="Ieškokite" name="search">
                <button type="submit">Ieškoti</button>
            </form>
        </div>
    </div>
    </nav>
</aside>
<main>
    <section id="reg">
        <h1>Registracijos forma</h1>
    </section>
</main>


<footer id="elementas">Visos teises saugomos 2020&copy</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="funkcionalumas/popup.js"></script>
<script src="js/formSubmit.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/conect.js"></script>
</body>
</html>