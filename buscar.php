
<?php
$conn = mysqli_connect("localhost", "root", "", "stc_catalogo");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_GET['siglas'])) {
    // Recoge las siglas enviadas desde la petición AJAX
    $siglas = $_GET['siglas'];


    $query = "SELECT nombre, ext, res FROM areas WHERE siglas = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $siglas);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(null);
    }

    $stmt->close();
}

$conn->close();
?>
