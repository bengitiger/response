<?php
if (!defined('_BENGI_RWD_VER_')) exit;


/**
 *
 *    PATH
 *
 */

$GLB['path']['root'] = $_SERVER['DOCUMENT_ROOT']; // PATH


/**
 *
 *    URL
 *
 */

$GLB['url']['loc']   = $_SERVER["REQUEST_URI"];   // 현재 위치



/**
 *
 *    현재 위치
 *
 */

if( $GLB['url']['loc'] == '/' ) { 
  $GLB['url']['page']['loc'] = 'main';
  $GLB['url']['body']['class'] = 'main';  
}  
else {

  $GLB['url']['body']['class'] = 'sub';
  
  switch ( substr($GLB['url']['loc'], 1, -4 ) ) {
    case 'sub':
      $GLB['url']['page']['loc'] = 'menu1';
      break;
    case 'sub2':
      $GLB['url']['page']['loc'] = 'menu2';
      $GLB['url']['body']['class'] = 'sub full';
      break;
    case 2:
      $GLB['url']['page']['loc'] = 'sub';
      break;
    default:
      $GLB['url']['page']['loc'] = 'sub';
  }

}



/** ------------------------------------------------------
 *
 *                        경로 상수
 *
 */

define('BENGI_RWD_PATH', $GLB['path']['root']);



/**
 *
 *    AGENT CHECK
 *
 */

include_once $GLB['path']['root'].'/lib/css_browser/css_browser_selector.class.php';

$vAgent = css_browser_selector::getClassName($_SERVER['HTTP_USER_AGENT']);

