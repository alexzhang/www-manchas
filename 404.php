<?php
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
  $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header('HTTP/1.1 301 Moved Permanently');
  header('Location: ' . $redirect);
  exit();
} else {
  http_response_code(404);
  echo '<!DOCTYPE html>';
  echo '<html lang="en"><head><meta charset="utf-8"><title>404 Manchas not found</title><meta name="viewport" content="width=device-width, initial-scale=1">';
  echo '<link rel="stylesheet" href="css/normalize.css"><link rel="icon" type="image/x-icon" href="favicon.ico">';
  echo '</head><body style="text-align:center"><pre>404 Not Found</pre><hr><p><a href="/">Home</a></p></body></html>';
  exit();
}
