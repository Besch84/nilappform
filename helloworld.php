<html>
 <head>
  	<title>PHP Test</title>
 	<link href="https://cdn.rawgit.com/Besch84/Besch84.github.io/8ba19b52/import.css" rel="stylesheet" type="text/css">
 </head>
 <body>
 <!--<IMG STYLE="position:absolute; TOP:50px; LEFT:50px; WIDTH:150px; HEIGHT:150px" SRC="https://iviewplus.digital.nhs.uk/css/images/NHSDigitalLogo.svg"> -->
 <?php $ID = 1 ?>
 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$remote_server = 'sql2.freemysqlhosting.net';
$db_user = 'sql2209752';
$db_password = "zL3!tS3%";
$db_name = 'sql2209752';
$mysqli = mysqli_connect($remote_server, $db_user, $db_password, $db_name);
if (mysqli_connect_errno())
  {
  echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() . "</h1>";
  }

$query = mysqli_query($mysqli, "SELECT * FROM questions WHERE ID = " . $_GET["name"]);
$result = mysqli_fetch_array($query);
echo "<h1>" . $result['Heading'] . "</h1>";
echo "<h2>" . $result['GText'] . "</h2>";
mysqli_close($mysqli);
?>

</body>
</html>