<?php
echo "<h3>MySQL connection:</h3>";
$mysqli = new mysqli("db", "user", "test", "myDb");
if ($mysqli->connect_errno) {
    echo "MySQL connection failed: " . $mysqli->connect_error;
} else {
    $result = $mysqli->query("SELECT id, name, age FROM persons");
    while ($row = $result->fetch_assoc()) {
        echo "{$row['id']} - {$row['name']} - {$row['age']}<br>";
    }
}

echo "<h3>PostgreSQL connection:</h3>";
$pg_conn = pg_connect("host=postgres port=5432 dbname=pgdb user=pguser password=pgpass");
if (!$pg_conn) {
    echo "PostgreSQL connection failed.";
} else {
    $result = pg_query($pg_conn, "SELECT id, name, age FROM persons");
    if ($result) {
        while ($row = pg_fetch_assoc($result)) {
            echo "{$row['id']} - {$row['name']} - {$row['age']}<br>";
        }
    } else {
        echo "PostgreSQL table 'persons' does not exist.<br>";
    }
}
?>
