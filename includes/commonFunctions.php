<?php
if (!function_exists('isMobile')) {
    function isMobile()
    {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
}

if (!function_exists('getCurrentFullUrl')) {
    function getCurrentFullUrl()
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $requestUri = $_SERVER['REQUEST_URI'];
        return $protocol . $host . $requestUri;
    }
}

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
        return $scheme . "://" . $host . $requestUri;
    }
}

if (!function_exists('getSiteUrl')) {
    function getSiteUrl() {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        return $protocol . $host . '/';
    }
}

if (!function_exists('cleanDescription')) {
    function cleanDescription($description)
    {
        $desc = preg_replace('/\s+/', ' ', $description);
        $cleanedString = preg_replace('/\\\\/', '', $desc);
        return str_replace([
            "â€\"",
            "â€¦",
            "â€™",
            "â€œ",
            "â€",
            "â€˜",
            "&amp;"
        ], ["—", "…", "’", "“", "”", "‘", "&"], $cleanedString);
    }
}

if (!function_exists('getUserIpAddress')) {
    function getUserIpAddress()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}

if (!function_exists('flattenErrorMessages')) {
    function flattenErrorMessages($errors) {
        $flattenedErrors = [];

        foreach ($errors as $field => $messages) {
            if (is_array($messages) && count($messages) > 0) {
                // Join messages if there are multiple, or just take the first one
                $flattenedErrors[$field] = implode(' ', $messages);
            } else {
                // If there's no array of messages, just assign the message
                $flattenedErrors[$field] = $messages;
            }
        }

        return $flattenedErrors;
    }
}

if (!function_exists('cleanString')) {
    function cleanString($string)
    {
        if (isset($string)) {
            $string = str_replace('/', '', $string);
            $string = trim($string, " ");
            $string = stripcslashes($string);
            $string = stripslashes($string);
            return $string;
        } else {
            return "-";
        }
    }
}
