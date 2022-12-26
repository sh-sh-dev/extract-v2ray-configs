<?php
$codes = json_decode(file_get_contents('codes.json'));

foreach ($codes as $code) {
  $exp = explode('://', $code);
  $type = $exp[0];
  if (in_array($type, ['vmess', 'vless', 'trojan']))
    $content = $type === "vless" ? proper_parse($exp[1]) : json_decode(base64_decode($exp[1]), true);
  else
    continue;

  print_r($content);
}

function proper_parse($str) {
  $result = [];
  parse_str($str, $result);
  return $result;
}


