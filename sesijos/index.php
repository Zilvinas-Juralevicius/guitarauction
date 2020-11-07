<html>

<body>
<form action="login.php" method="post">
    <input type="text" name="username" placeholder="Tavo vardas" required="username">
    <input type="password" name="password" placeholder="Tavo slaptazodis" required="password">
    <input type="submit" value="Submit">
</form>
<?php
session_start();
if(isset($_GET['logged']) && $_GET['logged'] === 'false'){
    echo 'Nepavyko prisijungti';
}

?>


</body>


</html>
