<!DOCTYPE html>
<html>
<head>
    <title>Certificado</title>
    <style>
        @page {
            margin-top: 100px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            position: fixed;
            bottom: 0px;
            width: 100%;
        }

        .left-section {
            text-align: left;
            position: relative;
            top: 55px;
            margin-left: 100px;
        }

        .right-section {
            position: relative;
            bottom: 1px;
            left: 550px;
        }

        .divTitulo {
            width: 100%;
            text-align: center;
        }

        .divContenido {
            margin-bottom: 200px;
            margin-top: 100px;
            margin-left: 100px;
        }
    </style>
</head>
<body>

    <div class="divTitulo">
        <h1>Certificado</h1>
    </div>

    <div class="footer-container">
        <div class="left-section">
            Código Único: {{ $uniqueCode }}
        </div>
        <div class="right-section">
            <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="Código QR">
        </div>
    </div>

    <div class="divContenido">
        <p>Nombre: {{ $fullName }}</p>
        <p>DNI: {{ $dni }}</p>
        <p>Tipo de DNI: {{ $dniType }}</p>
        <!-- Agrega más datos según sea necesario -->
    </div>

</body>
</html>
