<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consentimiento Informado</title>
    <style>
        /* Estilo general del documento */
        .documento {
            text-align: justify;
            margin: 20px;
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }

        /* Título principal */
        .titulo {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        /* Estilo de la declaración */
        .declaracion {
            margin-bottom: 20px;
        }

        /* Contenido principal */
        .contenido {
            margin-bottom: 30px;
        }

        .fechas {
            text-align: right;

        }

        /* Contenedor de firmas */
        .firmas {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }

        /* Firma del paciente o representante */
        .firma-paciente {
            text-align: left;
            font-weight: bold;
        }

        /* Firma del dentista */
        .firma-dentista {
            text-align: right;
            font-weight: bold;
        }

        /* Información del COP del dentista */
        .firma-dentista p {
            margin: 0;
        }

        /* Contenedor de firmas */
    </style>
</head>

<body>
    <div class="documento">
        <h1 class="titulo">CONSENTIMIENTO INFORMADO PARA LA REALIZACIÓN DE APICECTOMÍA</h1>

        <p class="declaracion">
            Yo <strong><?= $paciente->nomb_pac . ' ' . $paciente->apel_pac ?></strong>, identificado con DNI No. <strong><?= $paciente->dni_pac ?></strong>, mayor de edad,
            con domicilio en <strong><?= $paciente->dire_pac ?></strong>
            
        </p>


    </div>
</body>

</html>