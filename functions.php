<?php
$reservedPages = array();
$beforeLoad = array();
$header = array();
$beforeContent = array();
$afterContent = array();
$footer = array();
$jsScripts = array();
$cssStyles = array();
function newAction($event, $action) {
    global $beforeLoad, $header, $beforeContent, $afterContent, $footer, $jsScripts, $cssStyles;
    if($event=="beforeLoad") { array_push($beforeLoad, $action); }
    elseif($event=="header") { array_push($header, $action); }
    elseif($event=="beforeContent") { array_push($beforeContent, $action); }
    elseif($event=="afterContent") { array_push($afterContent, $action); }
    elseif($event=="footer") { array_push($footer, $action); }
    elseif($event=="jsScripts") { array_push($jsScripts, $action); }
    elseif($event=="cssStyles") { array_push($cssStyles, $action); }
    else { return false; exit; }
}
function runEvent($event) {
    global $beforeLoad;
    global $header;
    global $beforeContent;
    global $afterContent;
    global $footer;
    if($event=="beforeLoad") { $loop = $beforeLoad; }
    elseif($event=="header") { $loop = $header; }
    elseif($event=="beforeContent") { $loop = $beforeContent; }
    elseif($event=="afterContent") { $loop = $afterContent; }
    elseif($event=="footer") { $loop = $footer; }
    elseif($event=="jsScripts") { $loop = $jsScripts; }
    elseif($event=="cssStyles") { $loop = $cssStyles; }
    else { return false; exit; }
    foreach($loop as $action) {
        $action();
    }
}
function reserve_page($name) {
    global $reservedPages;
    if(file_exists("pages/" . $name . ".php")) { return false; exit; }
    foreach($reservedPages as $resPage) {
        if($resPage==$name) { return false; exit;}
    }
    array_push($reservedPages, $name);
}
function getContent() {
    global $callPage;
    if($callPage=="action") {
        global $page;
        $action = "getpage_" . $page;
        $action();
    }
    else { require "$callPage"; }
}
?>