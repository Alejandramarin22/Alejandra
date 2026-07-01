<?php
require_once 'config/Conexion.php';
require_once 'models/Pelicula.php';
require_once 'controllers/peliculas_controller.php';

$pdo = Conexion::obtener();
$modelo = new Pelicula($pdo);

$acciones = [
    'listar'             => 'accion_listar',
    'nueva'              => 'accion_nueva',
    'crear'              => 'accion_crear',
    'editar'             => 'accion_editar',
    'actualizar'         => 'accion_actualizar',
    'confirmar_eliminar' => 'accion_confirmar_eliminar',
    'eliminar'           => 'accion_eliminar'
];

$accionActual = $_GET['accion'] ?? 'listar';

if (array_key_exists($accionActual, $acciones)) {
    $funcionDestino = $acciones[$accionActual];
    $funcionDestino($modelo);
} else {
    die("<h1>Accion no valida</h1>");
}