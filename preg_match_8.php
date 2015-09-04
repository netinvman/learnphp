<?php
$pattern = "/[A-Z]$/";
$str = "I like PHP";
if (preg_match($pattern , $str)
    print "find match.";
else:
    print "not find match.";
?>
