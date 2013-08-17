<?php
// Call settings
require_once 'settings.php';
// Get page
$page = "";
$request = "";
if(!isset($_GET['page'])) { $page = $defaultPage; $request = ""; }
elseif ($_GET['page']=="index"||$_GET['page']=="") { $page = $defaultPage; $request = ""; }
else { $page = strtolower($_GET['page']); $request = $_GET['page']; }
$page = filter_var($page, FILTER_SANITIZE_ENCODED);
$callPage = "pages/" . $page . ".php";
if(!file_exists($callPage)) { $page = "404"; $callPage = "inc/" . $page . ".php"; }
// Load functions
require_once 'functions.php';
// Call theme actions
require_once "themes/$theme/actions.php";
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
        if($resPage==strtolower($request)) {
            $page = strtolower($request);
            $callPage = "action";
        }
    }
}
// Set title content
$pagename = get_mod_page_name($page);
$title = $pagename . " - " . $sitename;
// Load theme, which manages content too
require_once("themes/" . $theme . "/index.php");
?>
