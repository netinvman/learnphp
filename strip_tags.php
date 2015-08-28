<?php
$text = '
<p>Test paragraph.</p>
<!-- Comment -->
Other text';

echo strip_tags($text);
echo "<br>-------<br>";
echo strip_tags($text, '<p>');
?>
