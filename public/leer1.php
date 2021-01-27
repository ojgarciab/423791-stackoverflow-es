<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        p > span { border: solid red 1px; }
    </style>
</head>
<body>
    <p>Precio <span id="precio"></span></p>
    <p>Codigo  <span id="codigoautorizacion"></span></p>
    <p>Tarjeta  <span id="numerotarjeta"></span></p>
    <p>N° Orden  <span id="ordencompra"></span></p>
    <p>Tipo Pago  <span id="tipopago"></span></p>   
    <script>
        document.addEventListener("DOMContentLoaded", function(e) {
            document.getElementById('precio').innerText = window.localStorage.getItem('precio');
            document.getElementById('codigoautorizacion').innerText = window.localStorage.getItem('codigoautorizacion');
            document.getElementById('numerotarjeta').innerText = window.localStorage.getItem('numerotarjeta');
            document.getElementById('ordencompra').innerText = window.localStorage.getItem('ordencompra');
            document.getElementById('tipopago').innerText = window.localStorage.getItem('tipopago');
            console.log(window.localStorage.getItem('paymentTypeCode'));
        });
    </script>   
</body>
</html>
