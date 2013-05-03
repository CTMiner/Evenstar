<?php
require_once("themes/$theme/functions.php");
runEvent("beforeLoad");
require_once("themes/$theme/header.php");
runEvent("header");
echo("\n</div>\n<div class=\"navbar\">");
require 'navbar.php';
echo("\n</div>\n<div class=\"content\">");
runEvent("beforeContent");
getContent();
runEvent("afterContent");
echo("</div>\n<div class=\"footer\">");
require 'inc/footer.php';
runEvent("footer");
require_once "themes/$theme/footer.php";
?>