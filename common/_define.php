<?php

include_once $GLB['path']['root'].'/lib/css_browser/css_browser_selector.class.php';

$vAgent = css_browser_selector::getClassName($_SERVER['HTTP_USER_AGENT']);

