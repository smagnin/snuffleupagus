--TEST--
Multiple configuration files
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/config_multi2.ini,{PWD}/config/config_multi1.ini
--FILE--
<?php
function foo() {
echo "1\n";
}
function bla() {
echo "2\n";
}
foo();
bla();
?>
--EXPECTF--
Warning: [snuffleupagus][disabled_function] Aborted execution on call of the function 'foo' in %a/multi_config.php on line 3
1

Warning: [snuffleupagus][disabled_function] Aborted execution on call of the function 'bla' in %a/multi_config.php on line 6
2