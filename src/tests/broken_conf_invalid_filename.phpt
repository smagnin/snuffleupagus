--TEST--
Broken configuration filename without absolute path
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/broken_conf_invalid_filename.ini
--FILE--
--EXPECTF--
PHP Fatal error:  [snuffleupagus][config] Invalid configuration line: 'sp.disabled_functions.function("sprintf").filename("wrong file name").drop();':'.filename' must be an absolute path or a phar archive on line 1 in Unknown on line 0

Fatal error: [snuffleupagus][config] Invalid configuration line: 'sp.disabled_functions.function("sprintf").filename("wrong file name").drop();':'.filename' must be an absolute path or a phar archive on line 1 in Unknown on line 0