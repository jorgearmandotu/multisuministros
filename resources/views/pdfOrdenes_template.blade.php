<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/pdf/pdfOrdenes.css" />
    <title>Record PDF</title>
</head>
<body>
    <table>
        <tr>
            <th class="logo"><img src="assets/logo multisuministros.png" class="logo-img" style="max-width: 100px;"/><br><p id="sub-logo">“Tecnología avanzada para sus necesidades”<br>Nit: 901170291-3</p></th>
            <th><p class="title">ENTREGA EQUIPO Y/O TRABAJO REALIZADO</p></th>
            <th ><p id="version">Código: FTRR-23-004<br>Versión: 001<br>Fecha Emisión:  12- Mayo -2023</p></th>
        </tr>
        <tr>
            <th colspan="3"><p class="texto">El siguiente formato ha sido diseñado para la entrega al cliente de equipos y/o servicios </p></th>
        </tr>
        <tr>
            <th>Número de Orden</th>
            <th>ORD-año-{{ $number }}</th>
            <th></th>
        </tr>
        <tr>
            <th>Tipo de servicios</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <th colspan="3">DATOS DEL CLIENTE</th>
        </tr>
    </table>
    <h1>Record</h1>
    <p><strong>Fecha:</strong> {{ $date }}</p>
    <p><strong>Numero:</strong> {{ $number }}</p>
    <p><strong>firma:</strong>  <img src= {{ $client_signature }} /></p>
</body>
</html>