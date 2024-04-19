<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Suma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container-fluid {
            text-align: center;
            padding-top: 40px;
        }
    </style>
</head>

<body>
    <!-- Button trigger modal -->
    <div class="container-fluid">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Presiona aquí para realizar una suma o ver el resultado
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingrese dos números para sumar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <label for="">Ingrese número uno</label><br>
                        <input type="number" name="numero1"><br>
                        <label for="">Ingrese número dos</label><br>
                        <input type="number" name="numero2"><br>

                        <input type="submit" class="btn btn-success" value="SUMAR">
                    </form>

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {

                        $num1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0;
                        $num2 = isset($_POST['numero2']) ? $_POST['numero2'] : 0;

                        $suma = $num1 + $num2;
                        echo "<div class='alert alert-success'>La suma de $num1 y $num2 es: $suma</div>";
                    }
             
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>