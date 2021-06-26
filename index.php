<?php
    // CORS HEADERS
    header("Access-Control-Allow-Origin: https://shouman.xyz/");
    header("Access-Control-Allow-Origin: https://www.shouman.xyz/");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");

    header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

if (!(isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) 
    && $_SERVER['PHP_AUTH_USER'] == 'myuser' 
    && $_SERVER['PHP_AUTH_PW'] == 'mypswd')) {

    header('WWW-Authenticate: Basic realm="Restricted area"');
    header('HTTP/1.1 401 Unauthorized');

    $data['result'] = 'HTTP/1.1 401 Unauthorized';
} else {
    $data['result'] = 'HTTP/1.1 200 Ok';
}

echo json_encode($data);?>

<script type="text/javascript">
    window.location.replace(window.location.protocol + "//" + window.location.hostname + "/wp-admin");
</script>