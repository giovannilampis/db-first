<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>db-first</title>
</head>

<body>
    <div class="container my-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Dati Automobile</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Attributo</th>
                    <th scope="col">Primary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-danger" scope="row">Marca</th>
                    <td>VARCHAR(50)</td>
                    <td>NULL</td>
                    <td></td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Modello</th>
                    <td>VARCHAR(50)</td>
                    <td>NULL</td>
                    <td></td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Colore</th>
                    <td>VARCHAR(50)</td>
                    <td>Thornton</td>
                    <td></td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Targa</th>
                    <td>VARCHAR(20)</td>
                    <td>UNIQUE NULL</td>
                    <td>PRIMARY KEY</td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Numero VIN</th>
                    <td>VARCHAR(30)</td>
                    <td>UNIQUE NULL</td>
                    <td>SECONDARY KEY</td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Numero Immatricolazione</th>
                    <td>VARCHAR(70)</td>
                    <td>UNIQUE NULL</td>
                    <td>INDEX</td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Cilindrata</th>
                    <td>TINYINT</td>
                    <td>NULL</td>
                    <td></td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Anno</th>
                    <td>YEAR</td>
                    <td>NULL</td>
                    <td></td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Cambio</th>
                    <td>VARCHAR(30)</td>
                    <td>NOT NULL</td>
                    <td></td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">KM</th>
                    <td>INT</td>
                    <td>NOT NULL</td>
                    <td></td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Carburante</th>
                    <td>VARCHAR(30)</td>
                    <td>NOT NULL</td>
                    <td></td>
                </tr>
                <tr>
                    <th class="text-danger" scope="row">Potenza</th>
                    <td>VARCHAR(30)</td>
                    <td>NOT NULL</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>