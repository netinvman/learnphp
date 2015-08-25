<?php
function hobby($style = "move")
{
    return "i like $style<br>";
}
echo hobby();
echo hobby("song");

function hobby_1($who, $type = "dance")
{
    return "$who like $type<br>";
}
echo hobby_1("zhang");
echo hobby_1("zhang", "move");

function hobby_2($type = "dance", $who)
{
    return "$who like $type<br>";
}
echo hobby_2("zhang");
?>
