--TEST--
Broken configuration - unmatching brackets
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/config_unmatching_brackets.ini
--FILE--
--EXPECTF--
PHP Fatal error:  [snuffleupagus][config] Invalid `]` position. in Unknown on line 0
PHP Fatal error:  [snuffleupagus][config] Invalid value 'arr[b]]]]]' for `param` on line 1 in Unknown on line 0

Fatal error: [snuffleupagus][config] Invalid `]` position. in Unknown on line 0

Fatal error: [snuffleupagus][config] Invalid value 'arr[b]]]]]' for `param` on line 1 in Unknown on line 0