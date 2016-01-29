<?php
if (!defined('_BENGI_RWD_VER_')) exit;

/** ---------------------------------------------------------------
 *
 *    SQL Injection 등으로 부터 보호를 위해 sql_escape_string() 적용
 *
 */

// multi-dimensional array에 사용자지정 함수적용
function array_map_deep($fn, $array)
{
  if(is_array($array)) {
    foreach($array as $key => $value) {
      if(is_array($value)) {
        $array[$key] = array_map_deep($fn, $value);
      } else {
        $array[$key] = call_user_func($fn, $value);
      }
    }
  } else {
    $array = call_user_func($fn, $array);
  }

  return $array;
}


// SQL Injection 대응 문자열 필터링
function sql_escape_string($str)
{
  if(defined('G5_ESCAPE_PATTERN') && defined('G5_ESCAPE_REPLACE')) {
    $pattern = G5_ESCAPE_PATTERN;
    $replace = G5_ESCAPE_REPLACE;

    if($pattern)
      $str = preg_replace($pattern, $replace, $str);
  }

  $str = call_user_func('addslashes', $str);

  return $str;
}


// magic_quotes_gpc 에 의한 backslashes 제거
if (get_magic_quotes_gpc()) {
  $_POST    = array_map_deep('stripslashes',  $_POST);
  $_GET     = array_map_deep('stripslashes',  $_GET);
  $_COOKIE  = array_map_deep('stripslashes',  $_COOKIE);
  $_REQUEST = array_map_deep('stripslashes',  $_REQUEST);
}

// sql_escape_string 적용
$_POST    = array_map_deep(G5_ESCAPE_FUNCTION,  $_POST);
$_GET     = array_map_deep(G5_ESCAPE_FUNCTION,  $_GET);
$_COOKIE  = array_map_deep(G5_ESCAPE_FUNCTION,  $_COOKIE);
$_REQUEST = array_map_deep(G5_ESCAPE_FUNCTION,  $_REQUEST);


/** ---------------------------------------------------------------
 *
 *    변수값을 초기화
 *
 */

$GLB = array();
