<html><head>
  <meta charset="UTF-8">
  <title>Application Form</title>
<link href="https://cdn.rawgit.com/Besch84/Besch84.github.io/8ba19b52/import.css" rel="stylesheet" type="text/css">
</head>
<IMG STYLE="position:absolute; TOP:50px; LEFT:50px; WIDTH:150px; HEIGHT:150px" SRC="https://iviewplus.digital.nhs.uk/css/images/NHSDigitalLogo.svg"> 
<hr width="100%" STYLE="position:absolute; top:220px">
<!--Breadcrumb Text-->
<hr width="100%" STYLE="position:absolute; top:260px">
<body>

<?php/*
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

$query = mysqli_query($mysqli, "SELECT * FROM questions WHERE ID = " . $_GET["Q"]);
$result = mysqli_fetch_array($query);
$QuestionText = $result['Heading'];
$IntroLen = strlen($result['IntroText']);
/*if ($IntroLen > 0)
{
  $GText = $result['IntroText'];
}
$GTextLen = strlen($result['GText']);

if ($GTextLen > 0) 
{
  $GText = $result['GText'];
}
$AStyle = $result['AStyle'];
$YNext = $result['NextQY'];
$NNext = $result['NextQN'];
$NextQ = $result['NextQ'];
$YN = '<form id="YN" name="Form' . $_GET["Q"] . '>
<input type="radio" name="YN' . $_GET["Q"] . '" id="Yes' . $_GET["Q"] . '" value="Yes" onclick="RadioSelect()">
<label> Yes</label>
<input type="radio" name="YN' . $_GET["Q"] . '" id="No' . $_GET["Q"] . '" value="No" onclick="RadioSelect()">
<label>  No</label>
</div>'
$SL = '<textarea ID="AnswerArea"></textarea><br>'
$BB = '<textarea ID="BigBox"></textarea><br>'
/*$YNLogic = '<script>
            YNLinkLogic = function RadioSelect() {
   
            if(document.getElementById("Yes' . $_GET[0] . '").checked) {
                document.getElementById('RadioLink').href = "http://appform.epizy.com/2.php?Q=' . $YNext . '";
            }
            if(document.getElementById("No' . $_GET[0] . '").checked) {
                document.getElementById('RadioLink').href = "http://appform.epizy.com/2.php?Q=' . $NNext . '";
                }
              }
              </script>'*/ 
$NextButton = '<button type="submit" class="button"><a href="", id="RadioLink">' . $NextQ . '</a><button>'
mysqli_close($mysqli);
if (mysqli_connect_errno())
  {
  echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() . "</h1>";
  }

?>
<div style="position: absolute; TOP: 300px; left:100px">
<h1><?php echo $QuestionText ; ?></h1>
<h2><?php echo $GText ; ?></h2>

<?php /* 
if ($AStyle == 'YN') {
  echo $YNLogic ;
} elseif ($AStyle == 'BB') {
  echo $BB ;
} elseif ($SL == 'SL') {
  echo $SL ;
}
*/?>

<?php echo $NextButton ; ?>
<br>
<a ID="prevtext" href="1.html">Previous</a>
</div>
</body>
</html>