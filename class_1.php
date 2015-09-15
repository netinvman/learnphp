<?php
class A {
    function example() {
        echo "i am base class A::exmple().<br>";
    }
}

class B {
    function example() {
        echo "i am child class 's function B::example().<br>"
	A::example();
    }
}

A::example();
$b = new B:
$b->example();
?>
