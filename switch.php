<?php
switch (date("D")) {
    case "Mon":
        echo "Monday";
        break;
    case "Tue":
        echo "Tuesday";
        break;
    case "Wed":
        echo "Wednesday";
        break;
    case "Fri":
        echo "Friday";
        break;
    default:
        echo "weekend";
        break;
}
?>
