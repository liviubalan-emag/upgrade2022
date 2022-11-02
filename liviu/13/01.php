<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("sql.freedb.tech", "freedb_liviu", "jWM@%sWAAtHs5Y6", "freedb_upgrade");

$query = "SELECT * FROM participants";
$result = $mysqli->query($query);

/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
var_dump($row);

/* associative array */
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<br>\n";
var_dump($row);

/* associative and numeric array */
$row = $result->fetch_array(MYSQLI_BOTH);
echo "<br>\n";
var_dump($row);
