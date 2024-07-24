<?php
// Dados de conexão pode ser conectando SQLSERVER ou MySQL ou PHPMyAdmin(no xampp se for local)
$serverName = "LOBODELL\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "Locadora",
    "Uid" => "lobinho",
    "PWD" => "Senha123$"
);

// Estabelece conexão
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Verifica conexão
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Query SQL
$query = "SELECT * FROM Locadora";
$result = sqlsrv_query($conn, $query);

// Exibe resultados
while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
    echo $row['Titulo'] . "<br />";
}

// Fecha conexão
sqlsrv_close($conn);
?>
