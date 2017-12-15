<? error_reporting(E_ALL);
ini_set('display_errors', 1);
$remote_server = '54.247.107.148';
//$remote_server = 'sql2.freemysqlhosting.net';
$db_user = 'sql2209752';
$db_password = "zL3!tS3%";
$db_name = 'sql2209752';
$mysqli = mysqli_connect($remote_server, $db_user, $db_password, $db_name);
if (mysqli_connect_errno())
  {
  echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() . "</h1>";
  }	
?>