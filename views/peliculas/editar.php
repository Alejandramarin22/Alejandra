<div class="card shadow-sm mx-auto" style="max-width: 600px;">
    <div class="card-header bg-warning text-dark">
        <h4 class="mb-0">Modificar Película</h4>
    </div>
    <div class="card-body p-4">
        <form action="index.php?accion=actualizar" method="POST">
            <input type="hidden" name="id" value="<?php echo $pelicula['id']; ?>">
            
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required value="<?php echo htmlspecialchars($pelicula['titulo']); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Director</label>
                <input type="text" name="director" class="form-control" required value="<?php echo htmlspecialchars($pelicula['director']); ?>">
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">Año</label>
                    <input type="number" name="anio" class="form-control" required value="<?php echo $pelicula['anio']; ?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Género</label>
                    <input type="text" name="genero" class="form-control" required value="<?php echo htmlspecialchars($pelicula['genero']); ?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Duración (min)</label>
                    <input type="number" name="duracion" class="form-control" required value="<?php echo $pelicula['duracion']; ?>">
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <a href="index.php" class="btn btn-light me-2">Volver</a>
                <button type="submit" class="btn btn-warning">Actualizar</button>
            </div>
        </form>
    </div>
</div>