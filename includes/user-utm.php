<?php
session_start();
$task = isset($_GET['task']) ? $_GET['task'] : '';
if ($task == 'getRecords') {
    if (isset($_SESSION['user-utm']) && $_SESSION['user-utm']) {
        echo json_encode($_SESSION['user-utm']);
    } else {
        echo json_encode([]);
    }
    exit;
}
if ($task == 'getCountry') {
    $response = array();
    if(isset($_SESSION['ip_country_name'])){
        $response['ip_country_name'] = $_SESSION['ip_country_name'];
    }
    if(isset($_SESSION['country'])){
        $response['country'] = $_SESSION['country'];
    }
    echo json_encode($response);
    exit;
}
if ($task == 'setRecords') {
    if (isset($_POST)) {
        $_SESSION['user-utm'] = $_POST;
        if (isset($_SESSION['ip_country_name'])) {
            $_SESSION['user-utm']['ip_country_name'] = $_SESSION['ip_country_name'];
        }
        if (isset($_SESSION['country'])) {
            $_SESSION['user-utm']['country'] = $_SESSION['country'];
        }
        if (!isset($_SESSION['user-utm']['userId'])) {
            $compaign = 'Curaide';
            $dateObj = new DateTime();
            $month = str_pad($dateObj->format('m'), 2, '0', STR_PAD_LEFT);
            $day = str_pad($dateObj->format('d'), 2, '0', STR_PAD_LEFT);
            $year = $dateObj->format('Y');
            $date = $month . $day . $year;
            $randomNumber = rand(10000, 99999);
            $uniqueId = $compaign . $date . $randomNumber;
            $_SESSION['user-utm']['userId'] = $uniqueId;
        }
        if (($_POST['utm_medium'] == '-' || $_POST['utm_medium'] == '') && isset($_SESSION['http-referrer']) && $_SESSION['http-referrer']) {
            $searchEngines = ['google', 'bing', 'yahoo', 'baidu', 'duckduckgo'];
            $parse = parse_url($_SESSION['http-referrer']);
            $host = $parse['host'];
            $host = str_ireplace('www.', '', $host);
            $host = str_ireplace('.com', '', $host);
            $host = str_ireplace('.in', '', $host);
            $host = str_ireplace('.net', '', $host);
            $host = str_ireplace('.org', '', $host);
            $host = str_ireplace('in.', '', $host);
            $host = str_ireplace('search.', '', $host);
            $SERVER_NAME = $_SERVER['SERVER_NAME'];
            if (!strpos($SERVER_NAME, $host)) {
                $_SESSION['user-utm']['utm_source'] = $host;
                if (in_array($host, $searchEngines)) {
                    $_SESSION['user-utm']['utm_medium'] = 'Organic';
                } else {
                    $_SESSION['user-utm']['utm_source'] = 'Referral';
                    $_SESSION['user-utm']['utm_medium'] = $host;
                }
            }
        }
        echo json_encode($_SESSION['user-utm']);
    } else {
        echo json_encode([]);
    }
    exit;
}
if ($task == 'setUTMRecords' && isset($_POST)) {
    $_SESSION['user-utm'] = $_POST;  
}
if ($task == 'resetRecords') {
    if ($_SESSION['user-utm']) {
        unset($_SESSION['user-utm']);
        echo json_encode($_SESSION);
    } else {
        echo json_encode([]);
    }
    exit;
}
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
exit;
