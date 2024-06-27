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
            <th colspan="3"><p class="title">ENTREGA EQUIPO Y/O TRABAJO REALIZADO</p></th>
            <th colspan="2"><p id="version">Código: FTRR-23-004<br>Versión: 001<br>Fecha Emisión:  12- Mayo -2023</p></th>
        </tr>
        <tr>
            <th colspan="6"><p class="texto">El siguiente formato ha sido diseñado para la entrega al cliente de equipos y/o servicios </p></th>
        </tr>
        <tr>
            <th>Número de Orden</th>
            <th colspan="5">ORD-{{ $year }}-{{ $number }}</th>
        </tr>
        <tr>
            <th>Tipo de servicios</th>
            <th colspan="5">{{ $tipo_servicio }}</th>
        </tr>
        <tr>
            <th colspan="6">DATOS DEL CLIENTE</th>
        </tr>
        <tr>
            <th>Nombre/Razon social:</th>
            <th colspan="5">{{ $cliente->name }}</th>
        </tr>
        <tr>
            <th>Tipo de Documento:</th>
            <th>{{ $cliente->identification_type }}</th>
            <th>Número</th>
            <th>{{ $cliente->identification_number }}</th>
            <th>Télefono</th>
            <th>{{ $cliente->phone }}</th>
        </tr>
        <tr>
            <th colspan="6">Datos del Técnico</th>
        </tr>
        <tr>
            <th>Nombre:</th>
            <th colspan="3">{{ $tecnico->name }}</th>
            <th>Fecha:</th>
            <th>{{ $date }}</th>
        </tr>
        <tr>
            <th>Hora de Entrada</th>
            <th>{{ $horaEntrada }}</th>
            <th>Hora de Salida</th>
            <th>{{ $horaSalida }}</th>
        </tr>
        <tr>
            <th colspan="6">DESCRIPCION DEL EQUIPO* |DESCRIPCION DEL SERVICIO (*EQUIPO: MARCA, SISTEMA OPERATIVO, PUESTO DE TRABAJO, OTROS,)</th>
        </tr>
        <tr>
            <th colspan="6" class="descripciones"></th>
        </tr>
        <tr>
            <th colspan="6">TRABAJO REALIZADO </th>
        </tr>
        <tr>
            <th colspan="6" class="descripciones">
            </th>
        </tr>
        <tr>
            <th colspan="6">MATERIALES Y/O COMPONENTES USADOS:</th>
        </tr>
        <tr>
            <th colspan="6" class="descripciones">
            </th>
        </tr>
        <tr>
            <th colspan="6">OBSERVACIONES Y/O RECOMENDACIÓN TECNICO: ( *usuario, clave equipo. Etc.) </th>
        </tr>
        <tr>
            <th colspan="6" class="descripciones">
            </th>
        </tr>
        <tr>
            <th colspan="3"></th>
            <th colspan="3"><img src= {{ $client_signature }} id="signature" /></th>
        </tr>
        <tr>
            <th colspan="3">FIRMA DEL TECNICO</th>
            <th colspan="3">FIRMA DEL CLIENTE</th>
        </tr>
        <tfoot>
            <th colspan="6">NOTA: Para constancia del trabajo realizado y satisfacción del cliente se firma el presente documento.</th>
        </tfoot>
    </table>
    <!-- <h1>Record</h1>
    <p><strong>Fecha:</strong> {{ $date }}</p>
    <p><strong>Numero:</strong> {{ $number }}</p>
    <p><strong>firma:</strong>  <img src= {{ $client_signature }} /></p> -->
</body>
</html>