<?php

define('WP_SITEURL', 'http://localhost:8080/');
define('WP_HOME', 'http://localhost:8080/');
if ($scheme == 'https') {
  $_SERVER['HTTPS'] = 'on';
} else {
  $_SERVER['HTTPS'] = 'off';
}
