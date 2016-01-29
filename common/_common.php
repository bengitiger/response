<?php
error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING );


/** --------------------------------------------------
 *
 *                       COOKIE
 *
 */

header('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');


/** --------------------------------------------------
 *
 *                      TIME LIMIT
 *
 */

@set_time_limit(0);

/** --------------------------------------------------
 *
 *                       EXTRACT
 *
 */

$ext_arr = array ('PHP_SELF', '_ENV', '_GET', '_POST', '_FILES', '_SERVER', '_COOKIE', '_SESSION', '_REQUEST',
    'HTTP_ENV_VARS', 'HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_POST_FILES', 'HTTP_SERVER_VARS',
    'HTTP_COOKIE_VARS', 'HTTP_SESSION_VARS', 'GLOBALS');
$ext_cnt = count($ext_arr);
for ($i=0; $i<$ext_cnt; $i++) {
  // POST, GET 으로 선언된 전역변수가 있다면 unset() 시킴
  if (isset($_GET[$ext_arr[$i]]))  unset($_GET[$ext_arr[$i]]);
  if (isset($_POST[$ext_arr[$i]])) unset($_POST[$ext_arr[$i]]);
}

/** --------------------------------------------------
 *
 *                       DEFINE
 *
 */

function func_bengi_rwd_path()
{
  $result['path'] = str_replace('\\', '/', dirname(__FILE__));
  $tilde_remove = preg_replace('/^\/\~[^\/]+(.*)$/', '$1', $_SERVER['SCRIPT_NAME']);
  $document_root = str_replace($tilde_remove, '', $_SERVER['SCRIPT_FILENAME']);
  $root = str_replace($document_root, '', $result['path']);
  $port = $_SERVER['SERVER_PORT'] != 80 ? ':'.$_SERVER['SERVER_PORT'] : '';
  $http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 's' : '') . '://';
  $user = str_replace(str_replace($document_root, '', $_SERVER['SCRIPT_FILENAME']), '', $_SERVER['SCRIPT_NAME']);
  $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
  if(isset($_SERVER['HTTP_HOST']) && preg_match('/:[0-9]+$/', $host))
    $host = preg_replace('/:[0-9]+$/', '', $host);
    $result['url'] = $http.$host.$port.$user.$root;
    return $result;
}

$tmp_path = func_bengi_rwd_path();

include_once($tmp_path['path'].'/config.php');           // 설정 파일
include_once($tmp_path['path'].'/security.php');         // 보안 파일
include_once($tmp_path['path'].'/define.php');   // INCLUDE & DEFINE

unset($tmp_path);


