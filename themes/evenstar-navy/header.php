<!DOCTYPE html5>
<html>
<head>
    <title><?php echo($title); ?></title>
    <link rel="stylesheet" type="text/css" href="themes/<?php echo($theme); ?>/style.css">
    <?php /* doAction('loadCSS'); */
    if($jsLoc=="header") {
    echo("    <script type=\"text/javascript\" src=\"themes/$theme/scripts.js\"></script>");
    /* doAction('LoadJS'); */
    } ?>
</head>
<body>
<div class="header">