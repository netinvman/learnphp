<?php
/* open a connection */
$mysqli = new mysqli('localhost', 'phpdemo', 'phpdemo', 'world');
/* check connection */
if ($mysqli->connect_errno) {
    die('Connect Error (' . $mysqli->connect_errno. ')' . $mysqli->connect_error);
}

$sql = "SELECT Name, CountryCode FROM City WHERE id < ?";
if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("i", $id);
    $id = 10;
    /* execute statement */
    $stmt->execute();
    /* bind result variables */
    $stmt->bind_result($name, $code);

    /* store result */
    $stmt->store_result();
    printf("Numbers of rows: %d\n", $stmt->num_rows);

    echo "<table border=1 align='center' width= 500>";
    /* get resultset for metadata */
    $result = $stmt->result_metadata();

    /* retrieve field information from metadata result set */
    while ($field = $result->fetch_field()) {
        echo "<th>" . $field->name . "</th>";
    }
    $result->close();

    while ($stmt->fetch()) {
        printf("%s, (%s), $name, $code);
    }
    echo "</table>";

    /* free result */
    $stmt->free_result();

    /* close statement */
    $stmt->close();
}

/* close connection */
$mysqli->close();
?>
