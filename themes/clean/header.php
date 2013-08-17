<!DOCTYPE html5>
<html lang="en">
<head>
	<title><?php echo($title); ?></title>
<?php
runEvent("cssStyles");
echo("	<link rel=\"stylesheet\" type=\"text/css\" href=\"themes/$theme/style.css\">");
if($jsLoc=="header") {
echo("    <script type=\"text/javascript\" src=\"themes/$theme/scripts.js\"></script>");
runEvent("jsScripts");
} ?>
</head>
<body>
