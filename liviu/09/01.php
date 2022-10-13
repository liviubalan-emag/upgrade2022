<!DOCTYPE HTML>
<html>
<body>

<?php
var_dump($_POST);
var_dump($_POST['name']);
var_dump($_POST['email']);
?>
<form action="01.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>