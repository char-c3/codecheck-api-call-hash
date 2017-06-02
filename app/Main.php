<?php namespace Codecheck;

function run ($argc, $argv)
{
  $url = "http://challenge-server.code-check.io/api/hash";
  foreach ($argv as $index=>$value) {
    $query = "?q=". urlencode($value);
    $url_handle = fopen($url . $query, "r");
    $json = "";
    while ($gotstr = fread($url_handle, 1024)) {
        $json .= $gotstr;
    }
    $data = json_decode($json);
    echo $data->hash, PHP_EOL;
  }
}

