--TEST--
Cookie decryption in ipv4
--SKIPIF--
<?php if (!extension_loaded("snuffleupagus")) die "skip"; ?>
--INI--
sp.configuration_file={PWD}/config/config_encrypted_regexp_cookies_bad_regexp.ini
error_reporting=1
--COOKIE--
super_cookie=AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP3gV9YJZL/pUeNAjCKFW0U2ywmf1CwHzwd2pWM=;awful_cookie=awful_cookie_value;
--ENV--
return <<<EOF
REMOTE_ADDR=127.0.0.1
HTTP_USER_AGENT=Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/59.0.3071.109 Chrome/59.0.3071.109 Safari/537.36
EOF;
--FILE--
<?php var_dump($_COOKIE); ?>
--EXPECT--
array(2) {
  ["super_cookie"]=>
  string(92) "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP3gV9YJZL/pUeNAjCKFW0U2ywmf1CwHzwd2pWM="
  ["awful_cookie"]=>
  string(18) "awful_cookie_value"
}

Fatal error: [snuffleupagus][config] Failed to compile '^super_co[a-z+$': missing terminating ] for character class on line 2. in Unknown on line 0

Fatal error: [snuffleupagus][config] '.name_r()' is expecting a valid regexp, and not '"^super_co[a-z+$"' on line 2 in Unknown on line 0
