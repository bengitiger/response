<?php

/** ------------------------------------------------------
 * 
 *                        상수 선언
 * 
 */

define('_BENGI_RWD_VER_', '5.1.12');


/** ------------------------------------------------------
 *
 *                        시간 설정
 *
 */

date_default_timezone_set("Asia/Seoul");


define('BENGI_RWD_SERVER_TIME',    time());
define('BENGI_RWD_TIME_YMDHIS',    date('Y-m-d H:i:s', BENGI_RWD_SERVER_TIME));
define('BENGI_RWD_TIME_YMD',       substr(BENGI_RWD_TIME_YMDHIS, 0, 10));
define('BENGI_RWD_TIME_HIS',       substr(BENGI_RWD_TIME_YMDHIS, 11, 8));




/** ------------------------------------------------------
 *
 *                        도메인 상수
 *
 */

define('BENGI_RWD_DOMAIN', '');
define('BENGI_RWD_HTTPS_DOMAIN', '');



/** ------------------------------------------------------
 *
 *                        경로 상수
 *
 */




/** ------------------------------------------------------
 *
 *                       표현 방식
 *
 */

// ip 숨김방법 설정
define('BENGI_RWD_IP_DISPLAY', '\\1.♡.\\3.\\4');
