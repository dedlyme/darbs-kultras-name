<?php

$sql = "SELECT deju_kolektivi, apraksts FROM kolektivi WHERE  deju_kolektivi = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['deju_kolektivi']); 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<p>deju_kolektivi: " . $row["deju_kolektivi"] . "</p>";
    echo "<p>apraksts: " . $row["apraksts"] . "</p>";
    echo "<form method='post' action='delete.php'>";
    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
    echo "<input type='submit' value='Delete'>";
    echo "</form>";
} else {
    echo "0 results";
}

$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_to_delete = $_POST['deju_kolektivi'];
    $sql_delete = "DELETE FROM kolektivi WHERE deju_kolektivi = ?";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bind_param("i", $id_to_delete);
    if ($stmt_delete->execute() === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $stmt_delete->close();
}

$conn->close();
?>