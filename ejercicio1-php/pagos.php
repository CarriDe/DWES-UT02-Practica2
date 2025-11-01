<?php
# Info sobre los tipos de array en PHP -> https://www.php.net/manual/es/language.types.array.php

# Array multidimensional: Tiene uno o más arrays dentro de otro array. En nuestro caso un array, dentro de un array, dentro de un array. Nada confuso.
# Array principal $socios -> Tiene arrays asociativos ID1, ID2 -> Tienen los arrays de pagos
$socios = [
    "ID1" => [
        "ID" => 1,
        "Nombre" => "Sabrina",
        "Apellidos" => "Spellman Spellman",
        "DNI" => "98765432Q",
        "Mail" => "salem@witch.com",
        "Móvil" => 666222666,
        "pagos" => [
            "1692-01" => ["mes" => "Enero", "Importe" => 666, "estado" => "Pagado", "Fecha de pago" => "2028-01-16"],
            "1692-02" => ["mes" => "Febrero", "Importe" => 1, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-03" => ["mes" => "Marzo", "Importe" => 120, "estado" => "Pagado", "Fecha de pago" => "2028-03-10"],
            "1692-04" => ["mes" => "Abril", "Importe" => 90, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-05" => ["mes" => "Mayo", "Importe" => 100, "estado" => "Pagado", "Fecha de pago" => "2028-05-18"],
            "1692-06" => ["mes" => "Junio", "Importe" => 80, "estado" => "Pagado", "Fecha de pago" => "2028-06-20"],
            "1692-07" => ["mes" => "Julio", "Importe" => 150, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-08" => ["mes" => "Agosto", "Importe" => 200, "estado" => "Pagado", "Fecha de pago" => "2028-08-05"],
            "1692-09" => ["mes" => "Septiembre", "Importe" => 75, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-10" => ["mes" => "Octubre", "Importe" => 130, "estado" => "Pagado", "Fecha de pago" => "2028-10-28"],
            "1692-11" => ["mes" => "Noviembre", "Importe" => 95, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-12" => ["mes" => "Diciembre", "Importe" => 180, "estado" => "Pagado", "Fecha de pago" => "2028-12-15"]
        ]
    ],
    "ID2" => [
        "ID" => 2,
        "Nombre" => "Harvey",
        "Apellidos" => "Kinkle",
        "DNI" => "12345678Z",
        "Mail" => "harvey@greendale.com",
        "Móvil" => 666999333,

        "pagos" => [
            "1692-01" => ["mes" => "Enero", "Importe" => 50, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-02" => ["mes" => "Febrero", "Importe" => 75, "estado" => "Pagado", "Fecha de pago" => "2028-02-14"],
            "1692-03" => ["mes" => "Marzo", "Importe" => 90, "estado" => "Pagado", "Fecha de pago" => "2028-03-22"],
            "1692-04" => ["mes" => "Abril", "Importe" => 60, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-05" => ["mes" => "Mayo", "Importe" => 120, "estado" => "Pagado", "Fecha de pago" => "2028-05-05"],
            "1692-06" => ["mes" => "Junio", "Importe" => 110, "estado" => "Pagado", "Fecha de pago" => "2028-06-25"],
            "1692-07" => ["mes" => "Julio", "Importe" => 95, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-08" => ["mes" => "Agosto", "Importe" => 130, "estado" => "Pagado", "Fecha de pago" => "2028-08-15"],
            "1692-09" => ["mes" => "Septiembre", "Importe" => 85, "estado" => "Pagado", "Fecha de pago" => "2028-09-10"],
            "1692-10" => ["mes" => "Octubre", "Importe" => 140, "estado" => "Pendiente", "Fecha de pago" => null],
            "1692-11" => ["mes" => "Noviembre", "Importe" => 60, "estado" => "Pagado", "Fecha de pago" => "2028-11-02"],
            "1692-12" => ["mes" => "Diciembre", "Importe" => 150, "estado" => "Pagado", "Fecha de pago" => "2028-12-30"]
        ]
    ]
]

?>
<html>
    <head>

    </head>
    <body>
        <h1>Datos de 1 socio (hay 2)</h1>

        <!-- -->
        <h1>Tabla de pagos mensuales</h1> 
    </body>
</html>


