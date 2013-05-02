<?php
// Get page
$page = "";
$request = "";
if(!isset($_GET['page'])) { $page = "home"; $request = ""; }
elseif ($_GET['page']=="index"||$_GET['page']=="") { $page = "home"; $request = ""; }
else { $page = strtolower($_GET['page']); $request = $_GET['page']; }
$callPage = "pages/" . $page . ".php";
if(!file_exists($callPage)) { $page = "404"; $callPage = "pages/" . $page . ".php"; }
// Load functions
require_once 'functions.php';
// Call action.php files from plugins, where plugins register events
$plugarr = array();
$pluglist = scandir("plugins");
foreach($pluglist as $plugin)
  {
  $file = "plugins/" . $plugin . "/actions.php";
  if(is_dir("plugins/" . $plugin)&&$plugin!="."&&$plugin!="..")
    {
    if(file_exists($file))
      {
      array_push($plugarr,$plugin);
      }
    }
  }
foreach($plugarr as $plug)
  {
  $file = "plugins/" . $plug . "/actions.php";
  if(file_get_contents($file)!="") { require_once "$file"; }
  }
// Check is page is reserved and if so override sending to 404
if($page=="404"&&$page!=strtolower($request)) {
    foreach($reservedPages as $resPage) {
        $page = strtolower($request);
        $callPage = "action";
    }
}
// Call settings
require_once 'settings.php';
// Load theme, which manages content too
require_once("themes/" . $theme . "/index.php");
?>