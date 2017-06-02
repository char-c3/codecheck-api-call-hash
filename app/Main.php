<?php namespace Codecheck;

function run ($argc, $argv)
{
  $url = "http://challenge-server.code-check.io/api/hash";
  foreach ($argv as $index=>$value) {
    $query = "?q=". urlencode($value);
    $url_handle = fopen($url . $query, "r");
    $json = fread($url_handle, 82 + strlen($value));
    $data = json_decode($json);
    echo $data->hash, PHP_EOL;
  }
}

