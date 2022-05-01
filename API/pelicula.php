<?php

include_once 'db.php';

class Pelicula extends DB{
    
    function obtenerPeliculas(){
        $query = $this->connect()->query('SELECT * FROM peliculas');
        return $query;
    }

    function obtenerPelicula($id){
        $query = $this->connect()->prepare('SELECT * FROM peliculas WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query;
    }

    function nuevaPelicula($pelicula){
        $query = $this->connect()->prepare('INSERT INTO peliculas (nombre, imagen) VALUES (:nombre, :imagen)');
        $query->execute(['nombre' => $pelicula['nombre'], 'imagen' => $pelicula['imagen']]);
        return $query;
    }

    /**
     * UPDATE `peliculas` SET `nombre` = 'Avengers Infinity War 2' WHERE `peliculas`.`id` = 1;
     */
}

?>