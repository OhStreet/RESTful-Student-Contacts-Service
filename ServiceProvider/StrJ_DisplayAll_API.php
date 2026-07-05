<?php 

include_once("class_lib/StrJDB_Access.php");

$DB_Access = new StrJDB_Access();
$table = "strj_unit2_ex1_contacts";
$DB_Result = $DB_Access->displayRecords($table);

$data = array();

while ($row = $DB_Result->fetch_assoc()) {
    $data[] = $row;
}

print(json_encode($data));

// Display all records from the specified table
// $table = "strj_unit2_ex1_contacts";
// $DB_Result = $DB_Access->displayRecords($table);
// $rValue = "<h3>List of Records: <br /></h3>";
//     while($row = $DB_Result->fetch_assoc()) {
//         foreach($row as $value) {
//             $rValue .= "$value ";
//         }
//         $rValue .= "<br />";
//     }
// print($rValue);


?>