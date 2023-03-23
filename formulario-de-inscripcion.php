<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscripción TUEMPRESA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">


        <img src="logo.png" alt="Logo TUEMPRESA"
            class="mb-2 mt-3 rounded-circle border-1 shadow mx-auto d-block">
        <h5 class="mb-3">Descarga el catálogo TUEMPRESA</h5>
        <!-- Agrega aquí el formulario -->
        <form method="post" action="enviar-info-inscripcion.php"
            class="form form-group border border-1 rounded-3 p-4 shadow">

            <div class="row">
                <div class="mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-user-large me-2"></i>Nombres</span>
                        </div>
                        <input type="text" class="form-control" name="nombres" aria-label="nombres"
                            style="text-transform: uppercase" required>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-user-gear me-2"></i>Apellidos</span>
                        </div>
                        <input type="text" class="form-control" name="apellidos" aria-label="apellidos"
                            style="text-transform: uppercase" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-envelope me-2"></i> Email</span>
                        </div>
                        <input type="email" class="form-control" name="email" aria-label="email"
                            style="text-transform: lowercase" required>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary-emphasis bg-primary-subtle"><i
                                    class="fa-brands fa-square-instagram me-2"></i> Instagram</span>
                        </div>
                        <input type="text" class="form-control" name="instagram" aria-label="instagram" required>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary-emphasis bg-primary-subtle"><i class="fa-solid fa-mobile-screen-button me-2"></i> Teléfono</span>
                        </div>
                        <input type="tel" class="form-control" name="telefono" aria-label="telefono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required>
                    </div>
                </div>

            </div>

            <div class="row">
            <div class="input-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Acepto" id="terminos" required>
                    <label class="form-check-label" for="terminos">
                    Acepto las condiciones generales y la política de confidencialidad estipuladas en el enlace <a href="https://TUEMPRESA.com/content/5-politica-de-proteccion-de-datos-personales">protección de datos</a>
                    </label>
                    <div class="invalid-feedback">
                        Debe estar de acuerdo antes de enviar.
                    </div>
                </div>
                </div>
            </div>

            <button type="submit" class="btn btn-danger mt-5">Enviar</button>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>