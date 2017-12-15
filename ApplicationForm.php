<html>
<head>
	<meta charset="UTF-8">
	<title>Application Form</title>
	<link href="https://cdn.rawgit.com/Besch84/Besch84.github.io/8ba19b52/import.css" rel="stylesheet" type="text/css">
</head>
<IMG STYLE="position:absolute; TOP:50px; LEFT:50px; WIDTH:150px; HEIGHT:150px" SRC="https://iviewplus.digital.nhs.uk/css/images/NHSDigitalLogo.svg"> 
<hr width="100%" STYLE="position:absolute; top:220px">
<!--Breadcrumb Text-->
<hr width="100%" STYLE="position:absolute; top:260px">
<body>
<?php echo '<h1>test</h1>' ; ?>
<?php
$remote_server = 'sql2.freemysqlhosting.net';
$db_user = 'sql2209752';
$db_password = "zL3!tS3%";
$db_name = 'zL3!tS3%';
$mysqli = mysqli_connect($remote_server, $db_user, $db_password, $db_name);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql = "Select Astyle From questions;"
if ($result=mysqli_query($mysqli,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($mysqli);
?>
<h1>
	Header
</h1>

</body>
</html>