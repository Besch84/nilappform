<html><head>
  <meta charset="UTF-8">
  <title>Application Form Prototype</title>
<link href="https://cdn.rawgit.com/Besch84/Besch84.github.io/8ba19b52/import.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" media="screen" href="http://govuk-elements.herokuapp.com/public/stylesheets/govuk-template.css?0.23.0">
<link rel="stylesheet" media="screen" href="http://govuk-elements.herokuapp.com/public/stylesheets/govuk-elements-styles.css">
</head>
<IMG STYLE="position:absolute; TOP:50px; LEFT:50px; WIDTH:150px; HEIGHT:150px" SRC="https://iviewplus.digital.nhs.uk/css/images/NHSDigitalLogo.svg"> 
<hr width="100%" STYLE="position:absolute; top:220px">
<!--Breadcrumb Text-->
<hr width="100%" STYLE="position:absolute; top:260px">
<body>
<div style="position: absolute; TOP: 300px; left:100px; width: 75%">
<h1 class="heading-xlarge" style="Padding-bottom: 0px; margin-bottom: 30px; margin-top: 30px">Welcome to the prototype for the IMAS application form</h1>
<p class="lede">Please be aware that this prototype is <b>not</b> secure and as such, please enter only non-sensitive, non-personal data</p>
<p class="lede">Pleae enter a memorable reference for your application in the box below. If you are returning to a previous session, please enter the reference you assigned at that point</p>
<h1></h1>
<form action="" method="post">
	<label>Reference</label>
	<input type="text" name="ref" id="ref" required="required" placeholder="Please Enter reference"/><br /><br />
	<input type="submit" value=" Submit " name="submit"/><br />
</form>
<?php
if(array_key_exists('ref', $_POST)) {
    include 'connection.php';
    $ref = $_POST['ref'];
    $query = mysqli_query($mysqli, 'Select COUNT(*) FROM answers WHERE strRef = \'' . $ref . '\';');
    $result = mysqli_fetch_array($query);
    $strresult = array_shift($result);
    $query2 = mysqli_query($mysqli, 'INSERT INTO answers (strRef) VALUES (\'' . $ref . '\');');
    //echo '<h1>' . $ref . '</h1>';   
    //    if (strlen ($ref > 5)) {
    //    header("Location: http://www.google.com/");
    //    }
    
}
?>

</div>
</body>
</html>