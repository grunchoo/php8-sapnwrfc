--TEST--
Connection::getSSOTicket() exists
--SKIPIF--
<?php
require_once(__DIR__ . '/../skipif.inc');
?>
--FILE--
<?php

var_dump(method_exists('\SAPNWRFC\Connection', 'getSSOTicket'));

--EXPECT--
bool(true)