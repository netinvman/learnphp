<?php
preg_match("/^(http:\/\/)?(^\/]+)/i", "http://www.php.net/index.html", $matches);
$host = $mathes[2];

preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $mathes);
echo "domain name is:{$mathes[0]\n";
?>
