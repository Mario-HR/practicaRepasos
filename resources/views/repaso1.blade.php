<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        @vite(['resources/js/app.js'])
        <title>Repaso 1</title>
    </head>
    <body>
        <div class="container mt-5 col-md-6">
            <div class="card font-monospace">
                <div class="card-header fs-5 text-center text-primary">
                    Repaso 1 - Convertidor de unidades de almacenamiento digital
                </div>
                <form action="{{route('calcRepaso1')}}" method="POST">
                    @csrf
                    <div class="card-body text-justify">
                        <div class="mb-3">
                            <label for="cantidad">Cantidad a convertir:</label>
                            <input type="number" class="form-control" name="cantidad" required>
                        </div>
                        <div class="mb-3">
                            <label for="conversionUnidades">Conversión:</label>
                            <select class="form-select" name="conversionUnidades" required>
                                <option value="">Seleccione...</option>
                                <option value="mb-gb">MB-GB</option>
                                <option value="gb-mb">GB-MB</option>
                                <option value="gb-tb">GB-TB</option>
                                <option value="tb-gb">TB-GB</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2 mt-2 mb-1">
                            <button type="submit" class="btn btn-primary">Convertir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
