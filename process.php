<?php
$ref = $_Post['ref'];

$query = mysqli_query($mysqli, 'COUNT (Select * FROM answers WHERE strRef = "' . $ref . '"));');
$result = mysqli_fetch_array($query);

echo '<h1>'. $result . '</h1>;
?>