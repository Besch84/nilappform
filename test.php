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


<div style="position: absolute; TOP: 300px; left:100px">
<script type="text/javascript">
function RadioSelect() {
    "use strict";
    if (document.getElementById("Yes6").checked) {
        document.getElementById("RadioLink").href = "http://appform.epizy.com/AppForm.php?Q=8";
    }
    if (document.getElementById("No6").checked) {
        document.getElementById("RadioLink").href = "http://appform.epizy.com/AppForm.php?Q=7";
    }
}
</script><h1 class="heading-xlarge" style="Padding-bottom: 30px">Is this indicator a part of a collection?</h1><p class="lede" style="Padding-bottom: 30px">For example: it could be part of a set, domain or framework.</p>
<form>
<div class="form-group">
<fieldset class="inline">
<div class="multiple-choice">
<input id="Yes6" type="radio" name='YN6' value="Yes" onclick='RadioSelect()'>
<label for="Yes">Yes</label>
</div>
<div class="multiple-choice">
<input id="No6" type="radio" name='YN6' value="No" onclick='RadioSelect()'>
<label for="No">No</label>
</div>
</fieldset>
</div>
<button type="submit" class="button"><a href="" id='RadioLink'>Next</a></button>
</form><br>
</div>
</body>
</head>
</html>
