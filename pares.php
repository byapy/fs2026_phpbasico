<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Pares</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-success-subtle">
    <header class="bg-success shadow-sm">
        <nav class="container py-3">
            <div class="d-flex flex-wrap align-items-center gap-2">
                <a class="btn btn-outline-light" href="operacion.html">Operaciones</a>
                <a class="btn btn-outline-light" href="numeropos.html">Positivo</a>
                <a class="btn btn-outline-light" href="promedio.html">Promedio</a>
                <a class="btn btn-outline-light" href="mayormenor.html">Mayor y menor</a>
                <a class="btn btn-outline-light" href="tabla.php">Tabla</a>
                <a class="btn btn-light text-success fw-semibold" href="pares.php">Pares</a>
                <a class="btn btn-outline-light" href="palabra.html">Palabra</a>
                <a class="btn btn-outline-light" href="caracteres.php">Caracteres</a>
            </div>
        </nav>
    </header>
    <main class="container py-5">
        <section class="card border-success shadow mx-auto col-12 col-md-8 col-lg-5">
            <div class="card-header bg-success text-white">
                <h2 class="h4 mb-0">Numeros pares entre dos valores</h2>
            </div>
            <div class="card-body">
                <form action="objetos/objetoPares.php" method="post">
                    <div class="mb-3">
                        <label class="form-label text-success-emphasis" for="num_Inicio">Numero inicial</label>
                        <input class="form-control border-success" type="number" name="num_Inicio" id="num_Inicio">
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-success-emphasis" for="num_Final">Numero final</label>
                        <input class="form-control border-success" type="number" name="num_Final" id="num_Final">
                    </div>
                    <button class="btn btn-success w-100" type="submit" name="btnSubir" id="btnSubir">Subir</button>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success w-100" name="btnMayormenor" id="btnMayormenor">Buscar Mayor/Menor</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
