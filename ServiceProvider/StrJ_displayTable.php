<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "students";
$tableName = "strj_unit2_ex1_contacts";

$mysqli = new mysqli($hostname, $username, $password, $databaseName);
if ($mysqli->connect_error) {
    die("<h2>Connnect error to $hostname: " . $mysqli->connect_error . "</h2>");
}
print("Connection successful to: <br />

hoseName = $hostname <br />
databaseName = $databaseName <br /><br >");

print("<hr />");

//Show Databases on the MySQL hose specified
$query = "SHOW DATABASES";
$result = $mysqli->query($query);
if(!$result) {
    die(("There was an error running the query: " . $mysqli->error));
}
print("query \'$query\' ran successfully <br />");

while($row = $result->fetch_assoc()){
    print_r($row);
    print("<br />");
}
print("<hr />");

//Show Tables in the database specified
$query = "SHOW TABLES FROM $databaseName";
$result = $mysqli->query($query);
if(!$result) {
    die(("There was an error running the query: " . $mysqli->error));
}
print("query \'$query\' ran successfully <br />");

while($row = $result->fetch_assoc()){
    print_r($row);
    print("<br />");
}
print("<hr />");

$query = 'SELECT * FROM ' . $tableName;

if(!$result = $mysqli->query($query)) {
    die("There was an error running the query: " . $mysqli->error);
}

print("query \'$query\' ran successfully <br />");

while ($row = $result->fetch_assoc()) {
    print(
        $row['contact_id'] . " " .
        $row['first_name'] . " " .
        $row['last_name'] . " " .
        $row['email'] . " " .
        ($row['phone'] ?? '') . " " .
        ($row['major'] ?? '') . " " .
        ($row['grad_year'] ?? '') . " " .
        $row['created_at'] .
        "<br />"
    );
}

$mysqli->close();


?>