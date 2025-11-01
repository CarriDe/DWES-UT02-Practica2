Enunciado actualizado de la práctica

    Crea un proyecto en tu cuenta de GitHub denominado DWES-UT02-Practica2 y utiliza ese repositorio como base para tu práctica.
    Para que no se mezcle este proyecto con las siguientes prácticas, incluye la carpeta ejercicio1-php y trabaja el resto de contenidos en ella.

    Crea un archivo PHP llamado pagos.php.

    En él deberás definir:

    Un array asociativo multidimensional que contendrá la información de varios socios.
        Cada socio será un elemento del array y estará identificado por un id único.
        Dentro de cada socio se almacenarán sus datos personales: id, nombre, apellidos, DNI, email y teléfono

    Dentro de cada socio habrá un array asociativo con los pagos mensuales del año en curso.

        La clave de cada mes tendrá el formato "AAAA-MM".

        Cada mes contendrá:
            Nombre del mes.
            Importe de la cuota.
            Estado del pago (Pagado / Pendiente).
            Fecha de pago (o null si está pendiente).

    Dentro del código, y en forma de comentarios, incluye la documentación de PHP que explique cómo se crean arrays indexados, asociativos y multidimensionales.

    Utiliza HTML + PHP para mostrar en el navegador:

        Los datos de un socio (nombre, DNI, dirección, teléfono, email).

        Una tabla con los pagos de los 12 meses del año en curso, donde se muestre:
            Mes
            Importe
            Estado (Pagado / Pendiente)
            Fecha de pago (o guion si no se ha pagado).

    Si el pago está Pendiente, se deberá resaltar en la tabla con un color o estilo diferente (por ejemplo, fondo rojo claro o texto en rojo).

    Al final de la tabla se deberá mostrar el importe total abonado por el socio durante el año.