<?php
function foo()
{
	echo "foo() function<br>";
}

function bar($arg = '')
{
	echo "bar() function, argument is $arg <br>";
}

function echoit($string)
{
	echo $string;
}

$func = 'foo';
$func();

$func = 'bar';
$func('hello');

$func = 'echoit';
$func('test');
?>