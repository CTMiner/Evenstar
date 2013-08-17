<?php
newAction("cssStyles", "loadLibCss");
function loadLibCss() {
    echo("    <link rel=\"stylesheet\" type=\"text/css\" href=\"inc/libs/bootstrap/css/bootstrap.css\">");
    echo("    <link rel=\"stylesheet\" type=\"text/css\" href=\"inc/libs/bootstrap/css/bootstrap-glyphicons.css\">");
}
newAction("jsScripts", "loadLibJs");
function loadLibJs() {
    echo("    <script type=\"text/javascript\" src=\"inc/libs/jquery.js\"></script>");
    echo("    <script type=\"text/javascript\" src=\"inc/libs/bootstrap/js/bootstrap.js\"></script>");
}
newAction("footerTxt", "bootstrap_jquery_credits");
function bootstrap_jquery_credits() {
	echo(" - Uses Bootstrap licensed under <a href=\"http://www.apache.org/licenses/LICENSE-2.0\">Apache License v2.0</a>, Glyphicons Free licensed under <a href=\"http://creativecommons.org/licenses/by/3.0/\">CC BY 3.0</a>, and <a href=\"http://jquery.com/\">jQuery</a>");
}
?>
