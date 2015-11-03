<?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;
// define functon 'webPage'
function webPage($rows, $pageSize) {
    global $page, $selectFrom, $selectLimit, $pageNav;
    $pageCount = ceil($rows / $pageSize);
    if ($page <= 1) $page = 1;
    if ($page >= $pageCount) $page = $pageCount;
    $selectLimit = $pageSize;
    $selectFrom = ($page - 1) * $pageSize;
    $prePage = ($page == 1) ? 1 : $page - 1;
    $nextPage = ($page == $pageCount) ? $pageCount : $page + 1;
    $pageNav .= "$page/$pageCount, $rows records&nbsp;";
    $pageNav .= "<a href='?page=1'>First</a> ";
    $pageNav .= "<a href='?page={$prePage}'>previous</a> ";
    $pageNav .= "<a href='?page={$nextPage}'>next</a> ";
    $pageNav .= "<a href='?page={$pageCount}'>Last</a>";
    $pageNav .= " goto<select name='topage' size='1' onchange='window.location=\"?page=\"+this.value'>";
    for ($i = 1; $i <= $pageCount; $i++) {
        if ($i == $page)
            $pageNav .= "<option value='$i' selected>$i</option>";
        else 
            $pageNav .= "<option value='$i'>$i</option>";
    }
    echo "</select>";
}
if (!$conn = mysql_connect("localhost", "php", "php"))
    die("connection failed");
if (!mysql_select_db("php", $conn))
    die("selection database failed");
$rows = mysql_num_rows(mysql_query("select * from users"));
webPage($rows, 2);
$sql = "SELECT * FROM users LIMIT {$selectFrom}, {$selectLimit}";
$rst = mysql_query($sql);
while ($row = mysql_fetch_assoc($rst)) {
    echo "{$row['id']} - {$row['sex']} - {$row['name']} <br>";
}
echo $pageNav;
#mysql_free_result($rst);
mysql_close();
?>
