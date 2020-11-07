<?php
session_start();
if (isset($_SESSION['ar_prisijunges'])){
    echo 'Admino slaptas meniu <br> <a href="logout.php">Atsijungti</a>';
} else {
    header("Location: index.php?logged=false");
}