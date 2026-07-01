<?php

function accion_listar($modelo) {
    $peliculas = $modelo->todos();
    require 'views/layouts/header.php';
    require 'views/peliculas/lista.php';
    require 'views/layouts/footer.php';
}

function accion_nueva($modelo) {
    require 'views/layouts/header.php';
    require 'views/peliculas/nueva.php';
    require 'views/layouts/footer.php';
}

function accion_crear($modelo) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $modelo->crear($_POST['titulo'], $_POST['director'], $_POST['anio'], $_POST['genero'], $_POST['duracion']);
        header("Location: index.php");
        exit;
    }
}

function accion_editar($modelo) {
    $id = $_GET['id'] ?? 0;
    $pelicula = $modelo->porId($id);
    if (!$pelicula) {
        header("Location: index.php");
        exit;
    }
    require 'views/layouts/header.php';
    require 'views/peliculas/editar.php';
    require 'views/layouts/footer.php';
}

function accion_actualizar($modelo) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $modelo->actualizar($_POST['id'], $_POST['titulo'], $_POST['director'], $_POST['anio'], $_POST['genero'], $_POST['duracion']);
        header("Location: index.php");
        exit;
    }
}

function accion_confirmar_eliminar($modelo) {
    $id = $_GET['id'] ?? 0;
    $pelicula = $modelo->porId($id);
    if (!$pelicula) {
        header("Location: index.php");
        exit;
    }
    require 'views/layouts/header.php';
    require 'views/peliculas/confirmar_eliminar.php';
    require 'views/layouts/footer.php';
}

function accion_eliminar($modelo) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $modelo->eliminar($_POST['id']);
        header("Location: index.php");
        exit;
    }
}