<!DOCTYPE HTML>
<html>
<body>

<?php
var_dump($_GET);
var_dump($_GET['name']);
var_dump($_GET['email']);
?>
<form action="01.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>