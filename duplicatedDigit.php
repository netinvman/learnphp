<?php
// check zero
function chk_zero($num) {
	if (substr($num, 1, 1) == 0 or substr($num, 2, 1) == 0) {
		return False;
	}
	return True;
}
// check num repeat
function chk_num_repeat($num) {
	if (substr($num, 0, 1) == substr($num, 1, 1) or substr($num, 1, 1) == substr($num, 2, 1) or substr($num, 1, 1) == substr($num, 2, 1)) {
		return True;
	}
	return False;
}

// compute the duplicated num from 111 to 999
$counter = 0;
for ($i = 111; $i <= 999; $i++) {
	if (chk_zero($i) and chk_num_repeat($i)) {
		$counter += 1;
	}
}
echo "$counter" . "<br>";
?>