<?php
if (!defined('_BENGI_RWD_VER_')) exit;

function get_microtime()
{
  list($usec, $sec) = explode(" ",microtime());
  return ((float)$usec + (float)$sec);
}

$begin_time = get_microtime();