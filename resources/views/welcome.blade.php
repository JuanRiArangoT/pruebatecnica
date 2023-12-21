<!DOCTYPE html>
<html>
<head>
    <title>Vista para Generar PDF</title>
</head>
<body>
    <p>El DNI predeterminado para el input es: 1002147855</p>
    <form action="/generate-pf" method="post">
        @csrf
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>
        <button type="submit">Generar PDF</button>
    </form>

    <form action="/generate-pdf" method="get">
        @csrf
        <label>Si solo necesita el pdf generico solo de click acá:</label>
        <button type="submit">Generar PDF</button>
    </form>
</body>
</html>
