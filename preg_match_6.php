<?php
$pattern = "/^PHP$/";
$str = "PHP";
if (preg_match($pattern, $str))
    print ' find match.';
else
    print 'not find match.';

$str = "PHP is the best scripting language";
if (preg_match($pattern, $str)
    print 'find match.';
else
    print 'not find match.';
?>
