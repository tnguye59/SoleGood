<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$url = parse_url(getenv("CLEARDB\_DATABASE\_URL"));

// Staging and Production
$db['default'] = array(
    'hostname'		=> 	$url["host"],
    'username'		=> 	$url["user"],
    'password'		=> 	$url["pass"],
    'database'		=> 	substr($url["path"], 1),
    'dbdriver' 		=> 	'mysqli',
    'active_r' 		=>	true,
    'pconnect' 		=>	false,
    'db_debug' 		=>	true,
    'cache_on' 		=>	false,
    'char_set' 		=>	'utf8',
    'dbcollat' 		=>	'utf8_unicode_ci',
);

// Assign the group to be used
$active_group = 'default';
