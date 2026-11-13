<?php
include('conexion.php');
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!$data) {
        echo json_encode(["status" => "error", "mensaje" => "No se recibieron datos."]);
        exit;
    }

    $nombres = trim($data['nombres']);
    $ap_paterno = trim($data['apellido_paterno']);
    $ap_materno = trim($data['apellido_materno']);
    $telefono = trim($data['telefono']);
    $cp = trim($data['codigo_postal']);
    $estado = trim($data['estado']);
    $municipio = trim($data['municipio']);
    $calle_num = trim($data['calle_numero']);
    $tarjeta = preg_replace('/\D/', '', $data['tarjeta']);
    $cvv = preg_replace('/\D/', '', $data['cvv']);
    $productos = $data['productos'];
    $total = floatval($data['total']);

    // Validación estricta de tarjeta y CVV
    if (strlen($tarjeta) !== 16 || strlen($cvv) !== 3) {
        echo json_encode(["status" => "error", "mensaje" => "Tarjeta o CVV inválidos."]);
        exit;
    }

    $ultimos_4 = substr($tarjeta, -4);

    $stmt = $conexion->prepare("INSERT INTO ventas (nombres, apellido_paterno, apellido_materno, telefono, codigo_postal, estado, municipio, calle_numero, ultimos_digitos_tarjeta, productos, total_pago) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssd", $nombres, $ap_paterno, $ap_materno, $telefono, $cp, $estado, $municipio, $calle_num, $ultimos_4, $productos, $total);

    if ($stmt->execute()) {
        echo json_encode(["status" => "ok", "mensaje" => "¡Compra realizada y registrada con éxito!"]);
    } else {
        echo json_encode(["status" => "error", "mensaje" => "Error en la base de datos: " . $stmt->error]);
    }

    $stmt->close();
    $conexion->close();
}
?>