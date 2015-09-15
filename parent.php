<?php
class A {
    function example() {
        echo "i am A::example()<br>";
    }
}

class B {
    function example() {
        echo "i am B::example()<br>";
	parent::example();
    }
}

$b = new B();
$b->example();
?>
