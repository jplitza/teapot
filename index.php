<?php
header("Status: 418 I'm a Teapot");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>T-Error</title>
<link rel="stylesheet" href="netError.css" type="text/css" media="all">
</link>
<link id="favicon" rel="icon" type="image/png" href="warning-16.png"/>
<script type="application/javascript">
function retryThis(buttonEl)
{
  // Session history has the URL of the page that failed
  // to load, not the one of the error page. So, just call
  // reload(), which will also repost POST data correctly.
  try {
    location.reload();
  } catch (e) {
    // We probably tried to reload a URI that caused an exception to
    // occur; e.g. a nonexistent file.
  }
  buttonEl.disabled = true;
}
</script>
</head>
<body dir="ltr">
<div id="errorPageContainer">
<div id="errorTitle">
<h1 id="errorTitleText">Fehler: Ich bin ein Teekessel</h1>
</div>
<div id="errorLongContent">
<div id="errorShortDesc">
<p id="errorShortDescText">Der Server unter <script type="text/javascript">document.write(location.href);</script> glaubt, ein Teekessel zu sein.</p>
</div>
<div id="errorLongDesc">
<ul>
<li>Bitte überprüfen Sie die Adresse auf derartige Hinweise, wie das Vorkommen von <strong>tee</strong> oder <strong>tea</strong>.</li>
<li>Wenn auch andere Webseiten glauben, sie seien ein Teekessel, überprüfen Sie bitte Ihr Unwahrscheinlichkeitsniveau.</li>
<li>Wenn Ihre Firma oder Unternehmen von einer Kaffeemaschine dominiert wird, stellen Sie bitte sicher, dass auch der Teekonsum nicht zu kurz kommt.</li>
</ul>
</div>
</div>
<button id="errorTryAgain" onclick="retryThis(this);">Nochmals versuchen</button>
<button id="errorHelp" onclick="location.href='https://secure.wikimedia.org/wikipedia/de/wiki/Hyper_Text_Coffee_Pot_Control_Protocol';">Hilfe, was ist das</button>
</div>
</body>
</html>
