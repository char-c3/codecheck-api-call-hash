<?php namespace Codecheck;

function run ($argc, $argv)
{
  $url = "http://challenge-server.code-check.io/api/hash";
  foreach ($argv as $index=>$value) {
    $query = "?q=". urlencode($value);
    $json = file_get_contents($url . $query);
    $data = json_decode($json);
    echo $data->hash, PHP_EOL;
  }
}

