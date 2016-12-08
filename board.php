<?php

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead><tr><th>ID</th><th>Title</th><th>Description</th></tr></thead><tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['title'] . "</td><td>" . $row['description'] . "</td></tr>";
    }

    echo "</tbody></table>";
} else {
    echo "0 results";
}
$conn->close();
