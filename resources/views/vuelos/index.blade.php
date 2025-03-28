<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vuelos</title>
</head>
<body>
    <h1>Lista de Vuelos</h1>
    <table border="1">
        <thead>
            <tr>
               
                <th>Origen</th>
                <th>Destino</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($flights as $flight)
                <tr>
                   <td>{{ $flight->origin }}</td>
                    <td>{{ $flight->destination }}</td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>