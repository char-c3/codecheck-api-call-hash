<?php namespace Codecheck;

function run ($argc, $argv)
{
  $url = "http://challenge-server.code-check.io/api/hash";
  foreach ($argv as $index=>$value) {
    $query = "?q=". urlencode($value);
    $url_handle = fopen($url . $query, "r");
    $json = file_get_contents($url_handle);
    $data = json_decode($json);
    echo $data->hash, PHP_EOL;
  }
}

