<?php
class figure
{
	var $a;
	function draw($x, $y)
	{
		echo "horizontal point is: $x, vertical point is: $y <br>";
	}
}
// child class:circle
class circle extends figure
{
	functino draw($x, $y)
	{
		echo "circle point is: $x, half line is: $y <br>";
	}
}
// child class:rectangle
class rectangle extends figure
{
	function draw($x, $y, $z)
	{
		echo "rectangle 's height: $x, weight: $y, tall: $z <br>";
	}
}
// child class:line
class line extends figure
{
	function drawline($x, $y)
	{
		echo "draw line, start point: $x, end point: $y <br>";
	}
}
// constant of class figure
$a = new figure();
$a->draw(10, 100);
//constant of class circle
$b = new circle();
$b->draw(100, 100);
//constant of class rectangle
$c = new rectangle();
$c->draw(100, 100, 100);
// constant of class line
$d = new line();
$d->draw(10, 100)

?>