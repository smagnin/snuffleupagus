--TEST--
Broken configuration for eval
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) print "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_conf_eval.ini
--FILE--
--EXPECT--
PHP Fatal error:  [snuffleupagus][error] There is an issue with the parsing of '"cos,sin': it doesn't look like a valid string on line 1 in Unknown on line 0

Fatal error: [snuffleupagus][error] There is an issue with the parsing of '"cos,sin': it doesn't look like a valid string on line 1 in Unknown on line 0