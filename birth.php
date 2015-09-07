<?php
$birth_month = 1;
$birth_day = 29;
$birth_year = 1995;
if (empty($birth_year) || empty($birth_month) || empty($birth_day)) {
    die("birthday date is not complete.");
}
switch ($birth_month)
{
    case 1: print "January "; break;
    case 2: print "Februry "; break;
    case 3: print "March "; break;
    case 4: print "April "; break;
    case 5: print "May "; break;
    case 6: print "June "; break;
    case 7: print "July "; break;
    case 8: print "August "; break;
    case 9: print "September "; break;
    case 10: print "October "; break;
    case 11: print "November "; break;
    case 12: print "December "; break;
    default: die("month is not valid!");
}
if (($birth_day < 1) || ($birth_day > 31)) {
    die("date is wrong!");
} else {
    echo $birth_day, "&nbsp;";
}
if (($birth_year < 1990) || ($birth_year > 2005)) {
    die("year is wrong!");
} else {
    echo $birth_year;
}
?>
