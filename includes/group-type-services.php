<?php
include $_SERVER['DOCUMENT_ROOT']."/includes/page-collections.php";
$newPath = $path ? str_replace("index.php", "", $path) : '';
switch($newPath)
{
    case ($newPath=="/") :
        $group_name = "Curaide_Home_Page";
		$page_type = "HomePage"; 
        break;
	case in_array($newPath, $fwm_servicepages) :
        $group_name = "Mortgage";
		$page_type = "ServicePage"; 
        break;
	case in_array($newPath, $fwm_supportpages) :
        $group_name = "Mortgage";
		$page_type = "SupportPage"; 
        break;
	case in_array($newPath, $fwm_servicehomepages) :
        $group_name = "Mortgage";
		$page_type = "ServiceHomePage"; 
        break;
	case in_array($newPath, $fwm_thankspage) :
        $group_name = "ThankYou_Page";
		$page_type = "FormPage"; 
        break;
	case in_array($newPath, $fwm_contactform) :
        $group_name = "General_Form";
		$page_type = "FormPage"; 
        break;	
    case in_array($newPath, $fwm_generalpages) :
        $group_name = "General_Pages";
        $page_type = "GeneralPage"; 
        break;	
    default:
    $group_name = "-";
        $page_type = "-"; 
        //echo "$newPath is Ok";
}
?>
