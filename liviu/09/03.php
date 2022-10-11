<!DOCTYPE HTML>
<html>
<body>

<?php
var_dump($_POST);
?>
<form action="03.php" method="post" autocomplete="off">
    Name: <input type="text" name="name"><br>

    <label for="color">Color:</label>
    <input type="text" name="color" id="color"><br>

    <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="html">HTML</label><br>
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="css">CSS label</label><br>
    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label><br>

    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    <label for="vehicle1"> I have a bike</label><br>
    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
    <label for="vehicle2"> I have a car</label><br>
    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
    <label for="vehicle3"> I have a boat</label><br>

    <select id="cars" name="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
    </select><br>

    <label for="cars2">Choose a car:</label>
    <select id="cars2" name="cars2" size="4" multiple>
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
    </select><br>

    <textarea name="message" rows="10" cols="30">
    The cat was playing in the garden.
    </textarea><br>

    <fieldset>
        <legend>Personalia:</legend>
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <input type="submit" value="Submit">
    </fieldset><br>

    <label for="color_readonly">Color readonly:</label>
    <input type="text" name="color_readonly" id="color_readonly" value="readonly" readonly><br>

    <label for="color_disabled">Color readonly:</label>
    <input type="text" name="color_disabled" id="color_disabled" value="disabled" disabled><br>

    <label for="pin">PIN:</label>
    <input type="text" id="pin" name="pin" size="4"><br>

    <input type="submit" name="submit_button" value="Submit data">
    <input type="button" name="button" value="Click">
</form>

</body>
</html>