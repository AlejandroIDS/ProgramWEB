<?php
// Conectar a la base de datos
$conn = db_connect();

$sql = "SELECT fruta, stock, precio FROM fruteria";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutería - Stock y Precio</title>
    <link rel="stylesheet" href="/public/assets/style.css">
</head>
<body>
    <header>
        <?php include 'src\layout\header.php'; ?>
    </header>
    <main>
        <h1>Lista de Frutas</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Fruta</th>
                    <th>Stock</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['fruta'] . "</td>";
                        echo "<td>" . $row['stock'] . "</td>";
                        echo "<td>" . $row['precio'] . "$</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No hay frutas disponibles</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <?php include 'src\layout\footer.php'; ?>
    </footer>
</body>
</html>
