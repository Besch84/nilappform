<html><head>
  <meta charset="UTF-8">
  <title>Application Form</title>
<link href="https://cdn.rawgit.com/Besch84/Besch84.github.io/8ba19b52/import.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" media="screen" href="http://govuk-elements.herokuapp.com/public/stylesheets/govuk-template.css?0.23.0">
<link rel="stylesheet" media="screen" href="http://govuk-elements.herokuapp.com/public/stylesheets/govuk-elements-styles.css">
</head>
<IMG STYLE="position:absolute; TOP:50px; LEFT:50px; WIDTH:150px; HEIGHT:150px" SRC="https://iviewplus.digital.nhs.uk/css/images/NHSDigitalLogo.svg"> 
<hr width="100%" STYLE="position:absolute; top:220px">
<!--Breadcrumb Text-->
<hr width="100%" STYLE="position:absolute; top:260px">
<body>

<?php

include 'connection.php';

$query = mysqli_query($mysqli, 'SELECT * FROM questions WHERE ID = "' . $_GET["Q"] . '"');
$result = mysqli_fetch_array($query);

$QuestionHtml = '<h1 class="heading-xlarge" style="Padding-bottom: 0px; margin-bottom: 30px; margin-top: 30px">' . $result['Heading'] . '</h1>';
$IntroLen = strlen($result['IntroText']);
if ($IntroLen > 1)
{
  $GText = '<p class="lede"' . $result['IntroText'] . '</p>';
}

$GTextLen = strlen($result['GText']);
if ($GTextLen > 1)
{
	$GText = '<p class="lede" style="Padding-bottom: 30px">' . $result['GText'] . '</p>';
}

if ( empty($GText)) {
	$GText = '';

}
$AStyle = $result['AStyle'];
$YNext = $result['NextQY'];
$NNext = $result['NextQN'];
$NextQ = $result['NextQ'];



$SL = '<textarea ID="AnswerArea"></textarea><br>';
$BB = '<textarea ID="BigBox"></textarea><br>';

if ($AStyle == 'YN') {
	$YNLink = '<script type="text/javascript">
function RadioSelect() {
    "use strict";
    if (document.getElementById("Yes' . $_GET["Q"] . '").checked) {
        document.getElementById("RadioLink").href = "http://appform.epizy.com/AppForm.php?Q=' . $YNext . '";
    }
    if (document.getElementById("No' . $_GET["Q"] . '").checked) {
        document.getElementById("RadioLink").href = "http://appform.epizy.com/AppForm.php?Q=' . $NNext . '";
    }
}
</script>' ;
} else {
	$YNLink = '';
}

if ($AStyle == 'YN') {
	$NextButton = '<button type="submit" class="button"><a href="" id=\'RadioLink\'>Next</a></button><br>';
} else {
	//$NextButton = '<button type="submit" class="button"><a href=\'http://appform.epizy.com/AppForm.php?Q=' . $NextQ . '\'>Next</a></button>';
	//$NextButton = '<p class="button"><a href="http://appform.epizy.com/AppForm.php?Q=' . $NextQ . '">Next</a></p>' ;
	$NextButton = '
	<form action="http://appform.epizy.com/AppForm.php">
    <input type="hidden" name="Q" value="' . $NextQ . '">
    <input class="button" type="submit" value="Next" />
	</form>
	';
}
$YN = '<form>
<div class="form-group">
<fieldset class="inline">
<div class="multiple-choice">
<input id="Yes' . $_GET["Q"] . '" type="radio" name=\'Q\' value=\'' . $YNext . '\' onclick=\'RadioSelect()\'>
<label for="Yes">Yes</label>
</div>
<div class="multiple-choice">
<input id="No' . $_GET["Q"] . '" type="radio" name=\'Q\' value=\'' . $NNext . '\' onclick=\'RadioSelect()\'>
<label for="No">No</label>
</div>
</fieldset>
</div>
' . $NextButton . '
</form>';

$Previouslink = '<a ID="prevtext" href="5.html">Previous</a></div></body>'

?>

<div style="position: absolute; TOP: 300px; left:100px">
<?php echo $YNLink ; ?>
<?php echo $QuestionHtml ; ?>
<?php echo $GText ; ?>

<?php 
if ($AStyle == "YN") {
 echo $YN ;
}  elseif ($AStyle == "BB") {
	echo $BB ;
}
elseif ($AStyle == "SL") {
	echo $SL ; 
}
?>
<?php if ($AStyle != "YN") {
    echo $NextButton ; 
}
?>
</div>
</body>
</head>
</html>

