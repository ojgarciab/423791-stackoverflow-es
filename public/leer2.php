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
            /* Obtenemos los datos almacenados */
            let result = JSON.parse(window.localStorage.getItem("result"));
            document.getElementById('precio').innerText = result.detailOutput.amount;
            document.getElementById('codigoautorizacion').innerText = result.detailOutput.authorizationCode;
            document.getElementById('numerotarjeta').innerText = result.cardDetail.cardNumber;
            document.getElementById('ordencompra').innerText = result.detailOutput.buyOrder;
            document.getElementById('tipopago').innerText = result.detailOutput.paymentTypeCode;
            console.log(result.detailOutput.paymentTypeCode);
        });
    </script>
</body>
</html>
