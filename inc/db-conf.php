<?php 
require_once dirname(__FILE__).'/../vendor/autoload.php';

$conf_c=true;
mysql_connect('127.0.0.1','abbychau','aassddff');
mysql_select_db('bitcoindice');
mysql_query("SET NAMES utf8");