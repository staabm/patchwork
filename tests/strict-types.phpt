--TEST--
https://github.com/antecedent/patchwork/issues/79

--FILE--
<?php

ini_set('zend.assertions', 1);
error_reporting(E_ALL | E_STRICT);

require __DIR__ . "/../Patchwork.php";
require __DIR__ . "/includes/StrictTypes.php";

?>
===DONE===

--EXPECT--
===DONE===
