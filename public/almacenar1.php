<?php
/* Reproducimos la instancia de la pregunta */
$result = new class() {
    public $detailOutput;
    public $cardDetail;
    public function __construct()
    {
        $this->detailOutput = new class() {
            public $authorizationCode = '1415';
            public $paymentTypeCode = 'VD';
            public $responseCode = 0;
            public $sharesNumber = 0;
            public $amount = '11900';
            public $commerceCode = '597020000540';
            public $buyOrder = '849401686';
        };
        $this->cardDetail = new class() {
            public $cardNumber = 'Nºtarjeta';
        };
    }
};
$output = $result->detailOutput;
var_export($output);
if ($output->responseCode == 0) {
    ?><script>
        window.localStorage.clear();
        window.localStorage.setItem(
            "codigoautorizacion",
            <?= json_encode($output->authorizationCode) ?>
        );
        window.localStorage.setItem(
            "tipopago",
            <?= json_encode($output->paymentTypeCode) ?>
        );
        window.localStorage.setItem(
            "precio",
            <?= json_encode($output->amount) ?>
        );
        window.localStorage.setItem(
            "ordencompra",
            <?= json_encode($output->buyOrder) ?>
        );
        window.localStorage.setItem(
            "numerotarjeta",
            <?= json_encode($result->cardDetail->cardNumber) ?>
        );
        window.localStorage.setItem(
            "responseCode",
            <?= json_encode($output->responseCode) ?>
        );
    </script>DATOS ALMACENADOS<?php
}
