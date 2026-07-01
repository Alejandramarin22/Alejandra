<?php
class Pelicula {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function todos() {
        $stmt = $this->db->query("SELECT * FROM peliculas ORDER BY titulo ASC");
        return $stmt->fetchAll();
    }

    public function porId(int $id) {
        $stmt = $this->db->prepare("SELECT * FROM peliculas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function crear($titulo, $director, $anio, $genero, $duracion) {
        $sql = "INSERT INTO peliculas (titulo, director, anio, genero, duracion) 
                VALUES (:titulo, :director, :anio, :genero, :duracion)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':titulo'   => $titulo,
            ':director' => $director,
            ':anio'     => $anio,
            ':genero'   => $genero,
            ':duracion' => $duracion
        ]);
        return $this->db->lastInsertId();
    }

    public function actualizar($id, $titulo, $director, $anio, $genero, $duracion) {
        $sql = "UPDATE peliculas SET titulo = :titulo, director = :director, anio = :anio, 
                genero = :genero, duracion = :duracion WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id'       => $id,
            ':titulo'   => $titulo,
            ':director' => $director,
            ':anio'     => $anio,
            ':genero'   => $genero,
            ':duracion' => $duracion
        ]);
    }

    public function eliminar(int $id) {
        $stmt = $this->db->prepare("DELETE FROM peliculas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}