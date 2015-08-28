<?php
$str = "A 'quote' is <b>bold</b>";
echo htmlentities($str);
echo htmlentities($str, ENT_QUOTES);
?>
