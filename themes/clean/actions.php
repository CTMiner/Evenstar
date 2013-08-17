<?php
newAction("beforeContent", "pageTitles");
newAction("footerTxt", "themeCreds");
function pageTitles() { global $pagename; echo("<h1>" . $pagename . "</h1>\n<hr />\n"); }
function themeCreds() { echo("Clean is a CMS written by CTMiner - Theme is a modification of <i>Clean</i> by CTMiner called <i>Nova</i>"); }
?>
