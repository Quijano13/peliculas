<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-5 offset-3">
                <div class="card border border-dark shadow">
                    <div class="card-header bg-success text-center text-white"><b>Registro de nueva pelicula</b></div>
                    <div class="card-body">
                        <div class="row">
                            <form action="index.php" method="POST" enctype="multipart/form-data">
                                <div class="col-md-8 offset-2">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-film"></i></span>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="pelicula" name="pelicula" placeholder="Pelicula" required>
                                            <label for="pelicula">Pelicula</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-person-plus"></i></i></span>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="protagonistas" name="protagonistas" placeholder="Protagonistas" required>
                                            <label for="protagonistas">Protagonistas</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-camera-reels"></i></span>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="genero" name="genero"placeholder="Género" required>
                                            <label for="genero">Género</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-exclamation-circle"></i></i></span>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="clasificacion" name="clasificacion" placeholder="Clasificación" required>
                                            <label for="clasificacion">Clasificación</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-clock"></i></i></span>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="duracion" name="duracion" placeholder="Duración" required>
                                            <label for="duracion">Duración</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 offset-2">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-card-image"></i></span>
                                        <div class="form-floating">
                                            <input type="file" class="form-control" id="portada" name="portada" placeholder="Portada" accept="image/*">
                                            <label for="portada">Portada</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-success offset-5" name="guardar">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>