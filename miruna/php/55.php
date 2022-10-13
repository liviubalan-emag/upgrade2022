<!DOCTYPE HTML>
<html>
<body>

<?php
var_dump($_POST);
var_dump($_POST ['name']);
var_dump($_POST ['prenume']);
?>

<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    Prenume: <input type="text" name="prenume"><br>
    <input type="submit" value="Trimite" name="trimite">
</form>

</body>
</html>