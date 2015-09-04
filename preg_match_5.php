<?php
$str = "I like PHP";
$pattern = "/PHP$/";
if (preg_match($pattern, $str))
    print "find match";
?>
