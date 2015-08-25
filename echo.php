<?php
echo "Hello, World<br>";

echo "This spans 
multiple lines.
well done.<br>";

echo "Escaping characters is done \"Like this\".<br>";

$foo = "foobar";
$bar = "barbaz";
echo "foo is $foo<br>";

$car = array("value" => "foo");
echo "this is {$car['value']} !<br>";

echo 'foo is $foo<br>';

echo $foo . "<br>";
echo $foo,$bar;
echo "<br>";

echo 'This ', 'string ', 'was ', 'made ';
echo 'This ' . 'string ' . 'was ' . 'made ' . "<br>";

//($bar) ? 'true' : 'false';
($bar)?print('true'):print('false');

$myname = "forway";
$yourname = "admin";
?>
<br>html 's variable:<br>
my name is: <?php echo $myname ?>
<br>
your name is: <?php echo $yourname ?>
