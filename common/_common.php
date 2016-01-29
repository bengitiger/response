<?php
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
else $GLB['url']['page']['loc'] = 'sub';  



/**
 *
 *    INCLUDE
 *
 */

include_once $GLB['path']['root'].'/common/_define.php';

