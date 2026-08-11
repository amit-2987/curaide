<?php
ini_set('display_startup_errors', 0);
ini_set('display_errors', 0);
error_reporting(0);
include($_SERVER['DOCUMENT_ROOT'] . '/includes/country_api.php');
$current_page = basename($_SERVER['REQUEST_URI']);
function isActive($pages)
{
    $current_page = basename($_SERVER['REQUEST_URI']);

    if (is_array($pages)) {
        // Check if the current page is in the array of pages
        if (in_array($current_page, $pages)) {
            return 'active';
        }
    } else {
        // Check if the current page matches a single page
        if ($current_page === $pages) {
            return 'active';
        }
    }
}
$current_page = trim($current_page);


// Get the current page name
// $pageName = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), ".php");
// $serviceNames = [
//     'telenok' => 'FW AI CC',
//     'msuite' => 'FW AI Msuite',
//     'bot-at-work' => 'AI@FW',
//     'curaide' => 'FW AI HC',
//     'salesden' => 'AI@FW'
// ];
// $serviceName = isset($serviceNames[$pageName]) ? $serviceNames[$pageName] : 'FW';

if (!function_exists('getCurrentUrlWithoutQueryParameters')) {
    function getCurrentUrlWithoutQueryParameters()
    {
        $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
        $host = $_SERVER['HTTP_HOST'];
        $requestUri = strtok($_SERVER['REQUEST_URI'], '?#');
        if (($pos = strpos($requestUri, '.php')) !== false) {
            $requestUri = substr($requestUri, 0, $pos + 4);
        }
        $requestUri = preg_replace('#/{2,}#', '/', $requestUri);
        $canonicalUrl = $scheme . "://" . $host . $requestUri;
        return $canonicalUrl;
    }
}
$canonical_url = getCurrentUrlWithoutQueryParameters();
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
$path = $_SERVER['SCRIPT_NAME'];
$page = basename($path);
$page = basename($path, '.asp');
$currentpage_url = htmlentities($_SERVER["REQUEST_URI"]);
error_reporting(0);
session_start();
if (!isset($_SESSION)) {
    session_start();
}
define('ABSPATH', dirname(__FILE__) . '/');
$path = $_SERVER['SCRIPT_NAME'];
$page = basename($path);
$page = basename($path, '.php');
$currentpage_url = htmlentities($_SERVER["REQUEST_URI"]);
$filepath = $_SERVER['HTTP_POST'];
function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
// $isMobile = isMobile();
if ($_SERVER["HTTP_HOST"] == "www.curaide.ai" || $_SERVER["HTTP_HOST"] == "curaide.ai") {
    include($_SERVER['DOCUMENT_ROOT'] . '/includes/nitropack.php');
}
