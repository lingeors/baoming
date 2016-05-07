<?php
/**
 * 包含所有初始化信息
 * @var [type]
 */
$dirname = dirname(__FILE__);

include_once($dirname."/config.php");
include($dirname."/Db.php");

$db = Db::getInstance($dbtype, $dbhost, $dbname, $dbport, $username, $pw, $charset);