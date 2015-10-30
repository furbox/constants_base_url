<?php
// Base URL (keeps this crazy sh*t out of the config.php
if (isset($_SERVER['HTTP_HOST'])) {
    $base_url = 'http'
            . '://' . $_SERVER['HTTP_HOST']
            . str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

    // Base URI (It's different to base URL!)
    $base_uri = parse_url($base_url, PHP_URL_PATH);
    if (substr($base_uri, 0, 1) != '/')
        $base_uri = '/' . $base_uri;
    if (substr($base_uri, -1, 1) != '/')
        $base_uri .= '/';
}

else {
    $base_url = 'http://localhost/';
    $base_uri = '/';
}

// Define these values to be used later on
define('BASE_URL', $base_url);
define('BASE_URI', $base_uri);
define('APPPATH_URI', BASE_URI . APPPATH);

define('siteKey', '6LcSNgUTAAAAAJgv4dZGZ9V1_PRjrmOpRtC9lrtI');
define('secret', '6LcSNgUTAAAAAHtx6Z6p52vTryO6RBTjXOYRv5bn');

// We dont need these variables any more
unset($base_uri, $base_url);