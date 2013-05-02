<?php
require_once("themes/$theme/functions.php");
require_once("themes/$theme/header.php");
require 'inc/header.php';
echo("\n</div>\n<div class=\"navbar\">");
require 'inc/navbar.php';
echo("\n</div>\n<div class=\"content\">");
getContent();
echo("</div>\n<div class=\"footer\">");
require 'inc/footer.php';
require_once "themes/$theme/footer.php";
?>