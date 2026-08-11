<?php
session_start();
$path = $_SERVER['SCRIPT_NAME'];
$page = basename($path);
$page = basename($path, '.php');
$currentpage_url = htmlentities($_SERVER["REQUEST_URI"]);
$OrgName = "N/A";
$ISPName = "N/A";
$v_city = "Not Specified";
$v_country = "Not Specified";
$v_timezone = "Not Specified";
include_once $_SERVER['DOCUMENT_ROOT'] . "/includes/page-collections.php";
$pagePath = str_replace('index.php', '', $path);

switch ($pagePath) {
    case ($pagePath == "/"):
        $group_name = "Curaide_Home_Page";
        $page_type = "HomePage";
        break;
    case in_array($pagePath, $generalpages):
        $group_name = "General_Pages";
        $page_type = "GeneralPage";
        break;
    case in_array($pagePath, $thankspage):
        $group_name = "ThankYou_Page";
        $page_type = "FormPage";

        break;
    case in_array($pagePath, $contactform):
        $group_name = "General_Form";
        $page_type = "FormPage";
        break;
    default:
        //echo "$path is Ok";
        break;
}
?>