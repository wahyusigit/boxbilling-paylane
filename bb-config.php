<?php 
return array (
  'debug' => true,
  'license' => 'FREE-QSA1-PJUX-L8NX-H4JJ-VLSK',
  'salt' => '879c20c70bce38cb78b9f56c36992578',
  'url' => 'http://localhost:8888/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/Applications/MAMP/htdocs/boxbilling/bb-data',
  'path_logs' => '/Applications/MAMP/htdocs/boxbilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'name' => 'boxbilling',
    'user' => 'root',
    'password' => 'root',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/Applications/MAMP/htdocs/boxbilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);