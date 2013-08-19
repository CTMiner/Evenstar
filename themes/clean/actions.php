<?php
newAction("beforeContent", "pageTitles");
newAction("footerTxt", "themeCreds");
function pageTitles() { global $pagename; echo("<h1>" . $pagename . "</h1>\n<hr />\n"); }
function themeCreds() { echo("Evenstar is a CMS written by CTMiner - Theme is <i>Clean</i> by CTMiner"); }
?>
