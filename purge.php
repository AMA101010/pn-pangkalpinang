<?php
// curl -d 'url=https://pn-pangkalpinang.go.id/time.php' http://localhost/purge.php
$cache_path = '/home/pn-pangkalpinang/cache';
$url = parse_url($_POST['url']);

if (!$url) {
    echo 'Invalid URL entered';
    die();
}

$scheme = $url['scheme'];
$host = $url['host'];
$requesturi = $url['path'];
$hash = md5($scheme . 'GET' . $host . $requesturi);
var_dump(unlink($cache_path . substr($hash, -1) . '/' . substr($hash, -3, 2) . '/' . $hash));
