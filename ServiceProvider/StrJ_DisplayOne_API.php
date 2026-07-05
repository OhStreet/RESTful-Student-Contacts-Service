<?php
include_once("class_lib/StrJDB_Access.php");

$DB_Access = new StrJDB_Access();
$table = "strj_unit2_ex1_contacts";

$contact_id = $_GET['contact_id'] ?? "";

if ($contact_id === "") {
    print(json_encode(array("error" => "contact_id parameter is required")));
    exit;
}

$DB_Result = $DB_Access->selectOne($table, $contact_id);

if ($DB_Result && $row = $DB_Result->fetch_assoc()) {
    print(json_encode($row));
} else {
    print(json_encode(array("error" => "Record not found")));
}
?>