<?php
include('../db/dbcon.php');
if ($_POST["query"] != '') {
    $search_array = explode(",", $_POST["query"]);
    $search_text = "'" . implode("', '", $search_array) . "'";
    $query = $conn->query("SELECT * FROM images WHERE category IN (" . $search_text . ") ORDER BY id DESC");
} else {
    $query = $conn->query("SELECT * FROM images GROUP BY id DESC");
}
$total_row = mysqli_num_rows($query);
$output = '';
if ($total_row > 0) {
    while ($row = $query->fetch_object()) {
        // $salary = number_format($row->salary);
        $output .= '<td> <img src=' . $row->images . ' width=170px height=170px ></td>';
    }
} else {
    $output .= '<tr> <td colspan="5" align="center">No Data Found</td> </tr>';
}
echo $output;
?>