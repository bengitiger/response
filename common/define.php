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

if( $GLB['url']['loc'] == '/' ) $GLB['url']['page']['loc'] = 'main';
else {

  switch ( substr($GLB['url']['loc'], 1, -4 ) ) {
    case 'sub':
      $GLB['url']['page']['loc'] = 'menu1';
      break;
    case 1:
      $GLB['url']['page']['loc'] = 'sub';
      break;
    case 2:
      $GLB['url']['page']['loc'] = 'sub';
      break;
    default:
      $GLB['url']['page']['loc'] = 'sub';
  }

}



include_once $GLB['path']['root'].'/lib/css_browser/css_browser_selector.class.php';

$vAgent = css_browser_selector::getClassName($_SERVER['HTTP_USER_AGENT']);

