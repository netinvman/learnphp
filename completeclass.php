<?php
class Cart {
    var $items;
    var $name;
    function __construct($myName) {
        echo "$myName 's cart, charge process: <br>";
        $this->name = $myName;
    }
    function add_item($artnr, $num) {
        $this->items[$artnr] += $num;
        echo "<br>add $num $artnr, $artnr 's total num:" . $this->items[$artnr];
    }
    function remove_item($artnr, $num) {
        if ($this->items[$artnr] > $num) {
            $this->items[$artnr] -= $num;
            echo "<br>remove $num $artnr, $artnr 's total num: " . $this->items[$artnr];
            return true;
        } elseif ($this->items[$artnr] == $num) {
            unset($this->items[$artnr]);
            echo "<br>remove $num $artnr, $artnr 's total num is zero";
        } else {
            return false;
        }
    }
}
    $myCart = new Cart("zhang san");
    $myCart->add_item("apple", 9);
    $myCart->add_item("banana", 8);
    $myCart->remove_item("apple", 2);
    $myCart->remove_item("banana", 3);
?>
