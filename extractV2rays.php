<?php
$file = json_decode(file_get_contents('result.json'), true)['messages'];
$codes = [];

foreach ($file as $message) {
  $entities = $message['text_entities'];

  if (!$entities)
    continue;

  foreach($entities as $entity) {
    if ($entity['type'] === 'code') {
       $codes[] = $entity['text'];
    }
  }
}

file_put_contents('codes.json', json_encode($codes));
