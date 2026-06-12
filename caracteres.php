<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caracteres de 2 en 2</title>
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
                <a class="btn btn-outline-light" href="pares.php">Pares</a>
                <a class="btn btn-outline-light" href="palabra.html">Palabra</a>
                <a class="btn btn-light text-success fw-semibold" href="caracteres.php">Caracteres</a>
            </div>
        </nav>
    </header>
    <main class="container py-5">
        <section class="card border-success shadow mx-auto col-12 col-md-8 col-lg-5">
            <div class="card-header bg-success text-white">
                <h2 class="h4 mb-0">Mostrar caracteres de 2 en 2</h2>
            </div>
            <div class="card-body">
                <form action="objetos/objetoCaracteres.php" method="post">
                    <div class="mb-4">
                        <label class="form-label text-success-emphasis" for="txt_Texto">Texto</label>
                        <input class="form-control border-success" type="text" name="txt_Texto" id="txt_Texto">
                    </div>
                    <button class="btn btn-success w-100" type="submit" name="btnSubir" id="btnSubir">Subir</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
