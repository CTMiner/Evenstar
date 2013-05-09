<!DOCTYPE html>
<html>
<head>
    <title><?php echo($title); ?></title>
    <link rel="stylesheet" type="text/css" href="themes/<?php echo($theme); ?>/style.css">
    <?php
    runEvent("cssStyles");
    if($jsLoc=="header") {
    echo("    <script type=\"text/javascript\" src=\"themes/$theme/scripts.js\"></script>");
    runEvent("jsScripts");
    } ?>
</head>
<body>
<div class="wrap">  
<div class="header">
<h1 class="title"><?php echo($sitename); ?><span class="motto"><?php echo($motto); ?></span></h1>