<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Precio <span id="precio"></span></p>
    <p>Codigo  <span id="codigoautorizacion"></span></p>
    <p>Tarjeta  <span id="numerotarjeta"></span></p>
    <p>N° Orden  <span id="ordencompra"></span></p>
    <p>Tipo Pago  <span id="tipopago"></span></p>   
    <script>
        document.getElementById('precio').innerHTML = window.localStorage.getItem('precio');
        document.getElementById('codigoautorizacion').innerHTML = window.localStorage.getItem('codigoautorizacion');
        document.getElementById('numerotarjeta').innerHTML = window.localStorage.getItem('numerotarjeta');
        document.getElementById('ordencompra').innerHTML = window.localStorage.getItem('ordencompra');
        document.getElementById('tipopago').innerHTML = window.localStorage.getItem('tipopago');
        console.log(window.localStorage.getItem('paymentTypeCode'));
    </script>   
</body>
</html>
