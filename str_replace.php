<?php
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
$a = htmlspecialchars("<body text='%body%'>");
$b = htmlspecialchars($bodytag);
echo "origin string: $a <br>";
echo "replaced string: $b <br>";

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_repalce($vowels, "", "Hello World of PHP");
echo "original string: Hello World of PHP<br>";
echo "replaced string: $onlyconsonants<br>";
$phrase = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy = array("pizza", "beer", "ice cream");
$newphrase = str_replace($healthy, $yummy, $phrase);
echo "original string: You should eat fruits, vegetables, and fiber every day.<br>";
echo "replaced string: $newphrase<br>";

$str = str_repalce("ll", "", "good golly miss molly!", $count);
echo "replaced string 's count: $count";
?>
