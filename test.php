<?php
$h = fopen("php://input", 'r');
$log = fopen("/tmp/phplogs", "a");
while (!feof($h)) {
  $chunk = fread($h, 2048);
  fwrite($log, "read " . strlen($chunk) . " bytes.");
  fflush($log);
}
