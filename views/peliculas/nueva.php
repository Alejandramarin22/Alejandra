<div class="card shadow-sm max-width-md mx-auto" style="max-width: 600px;">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Añadir Nueva Película</h4>
    </div>
    <div class="card-body p-4">
        <form action="index.php?accion=crear" method="POST">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Director</label>
                <input type="text" name="director" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Año</label>
                    <input type="number" name="anio" class="form-control" required min="1900" max="2026">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Género</label>
                    <input type="text" name="genero" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Duración (min)</label>
                    <input type="number" name="duracion" class="form-control" required min="1">
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <a href="index.php" class="btn btn-light me-2">Cancelar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
</div>