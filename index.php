<?php
//這是 index.php
/*
include_once __DIR__ . "/autoload.php";

$member = new Member();
$member->getMemberList();
*/
/*
//修改後的 index.php
include_once __DIR__ . "/firstAutoload.php";
include_once __DIR__ . "/secondAutoload.php";

$first = new First();
$first->doSomething();

$second = new Second();
$second->doSomething();
*/

//又修改了　index.php
include_once __DIR__ . "/allAutoload.php";
$first = new First();
$first->doSomething();

$second = new Second();
$second->doSomething();
?>