<?php
// Php script syns inte på klienten, de körs på servern efter att klienten har bett om ett dokument
// phpinfo();

/* Uppg 1 - Systemareorna och superglobals */

print "Server: ".$_SERVER['SERVER_NAME'];
print "<br>Server ip: ". $_SERVER['SERVER_ADDR'];
print "<br>Apache version: ".apache_get_version();
print "<br>User: ".get_current_user();
print "<br>User ip: ".$_SERVER['REMOTE_ADDR'];
