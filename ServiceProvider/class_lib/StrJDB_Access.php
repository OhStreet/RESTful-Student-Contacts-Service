<?php 

class StrJDB_Access {
    private static $conn;
    private static $hostname = "localhost";
    private static $databaseName = "students";
    private static $username = "root";
    private static $password = "";  

    public function connectTo() {
        self::$conn = new mysqli(self::$hostname, self::$username, self::$password, self::$databaseName);
        if (self::$conn->connect_error) {
            return("Connect error to " . self::$hostname);
        }
        return("Connection successful to: <br />" .
            "hoseName = " . self::$hostname . "<br />" .
            "databaseName = " . self::$databaseName . "<br /><br />");
    }

    public function showDatabases() {
        self::connectTo();
        $query = "SHOW DATABASES";
        $result = mysqli_query(self::$conn, $query);
        self::$conn->close();
        return $result;
    }

    public function showTables() {
        self::connectTo();
        $query = "SHOW TABLES FROM " . self::$databaseName;
        $result = mysqli_query(self::$conn, $query);
        self::$conn->close();
        return $result;
    }

    public function displayRecords($tableName) {
        self::connectTo();
        $query = 'SELECT * FROM ' . $tableName;
        $result = mysqli_query(self::$conn, $query);
        self::$conn->close();
        return $result;
    }

    public function selectOne($tableName, $contact_id) {
        self::connectTo();
        $contact_id = (int)$contact_id;
        $query = 'SELECT * FROM ' . $tableName . ' WHERE contact_id=' . $contact_id;
        $result = mysqli_query(self::$conn, $query);
        self::$conn->close();
        return $result;
    }
}

?>