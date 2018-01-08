--TEST--
Eval whitelist - builtin function
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/eval_whitelist.ini
--FILE--
<?php 
$b = 1337;
$dir = __DIR__;

file_put_contents($dir . '/test.bla', '<?php $b = sin(1) ?>');
include_once $dir . '/test.bla';

$a = cos(1);
echo "Outside of eval: $a\n";
eval('$a = cos(5);');
echo "After allowed eval: $a\n";
eval("include_once('$dir' . '/test.bla');");
echo "After eval: $b\n";
?>
--CLEAN--
<?php
$dir = __DIR__;
unlink($dir . '/test.bla');
?>
--XFAIL--
--EXPECTF--
