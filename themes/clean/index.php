<?php
require_once("themes/$theme/functions.php");
runEvent("beforeLoad");
require_once("themes/$theme/header.php");
require 'inc/navbar.php';
echo("\n<div class=\"main container\"><div class=\"header\">");
// if($headerOnHomeOnly==true&&$page==$defaultPage) { require 'inc/header.php'; }
// else { doSomething(); }
runEvent("header");
echo("\n</div>\n<div class=\"content\">");
runEvent("beforeContent");
getContent();
runEvent("afterContent");
echo("\n</div>\n<div class=\"footer\">\n<hr />");
require 'inc/footer.php';
runEvent("footer");
echo("<hr />\n<small>");
runEvent("footerTxt");
require_once "themes/$theme/footer.php";
?>
