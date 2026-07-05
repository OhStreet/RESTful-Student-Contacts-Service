<?php 
include_once("class_lib/StrJDB_Access.php");

print("<h3>");

$DB_Access = new StrJDB_Access();

print("<hr />");

$DB_Result = $DB_Access->showDatabases();
$rValue = "List of Databases: <br />";
    while($row = $DB_Result->fetch_assoc()){
        foreach($row as $value) {
            $rValue .= $value . "<br />";
        }
    }
print($rValue);

print("<hr />");
$DB_Result = $DB_Access->showTables();
$rValue = "List of Tables: <br />";
    while($row = $DB_Result->fetch_assoc()){
        foreach($row as $value) {
            $rValue .= $value . "<br />";
        }
    }
print($rValue);

print("<hr />");
$DB_Result = $DB_Access->selectOne("strj_unit2_ex1_contacts", 1);
$rValue = "Selected Record: <br />";
    while($row = $DB_Result->fetch_assoc()) {
        foreach($row as $value) {
            $rValue .= "$value ";
        }
    }
print("$rValue");   

print("<hr />");
$table = "strj_unit2_ex1_contacts";
$DB_Result = $DB_Access->displayRecords($table);
$rValue = "List of Records: <br />";
    while($row = $DB_Result->fetch_assoc()) {
        foreach($row as $value) {
            $rValue = $rValue . "$value ";
        }
        $rValue = $rValue . "<br />";
    }
print($rValue);

print("</h3>");
?>