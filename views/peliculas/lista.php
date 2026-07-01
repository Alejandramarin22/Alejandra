<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h4 class="mb-0 text-secondary">Catálogo Infantil</h4>
    </div>
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Título</th>
                    <th>Director</th>
                    <th>Año</th>
                    <th>Género</th>
                    <th>Duración</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peliculas as $p): ?>
                    <tr>
                        <td class="fw-bold"><?php echo htmlspecialchars($p['titulo']); ?></td>
                        <td><?php echo htmlspecialchars($p['director']); ?></td>
                        <td><span class="badge bg-secondary"><?php echo htmlspecialchars($p['anio']); ?></span></td>
                        <td><span class="badge bg-info text-dark"><?php echo htmlspecialchars($p['genero']); ?></span></td>
                        <td><?php echo htmlspecialchars($p['duracion']); ?> min</td>
                        <td class="text-center">
                            <a href="index.php?accion=editar&id=<?php echo $p['id']; ?>" class="btn btn-sm btn-warning">✏️ Editar</a>
                            <a href="index.php?accion=confirmar_eliminar&id=<?php echo $p['id']; ?>" class="btn btn-sm btn-danger">❌ Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>