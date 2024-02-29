<?php

$search_id = $_GET['id'];

$db = new mysqli("localhost", "phpadmin", "root", "test_db");
if($db->connect_error){
    die("Ошибка: " . $db->connect_error);
}
$sql = "SELECT * FROM test_table WHERE id='$search_id'";

if($result = $db->query($sql)){
    echo "<table><tr><th>Name</th><th>Surname</th><th>Age</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["surname"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $db->error;
}
$db->close();
?>
