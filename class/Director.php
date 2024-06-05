<?php

class Director{
    protected $id;
    protected $nombre;
    protected $biografia;
    protected $imagen;

    public function catalogoDirector(int $id) :? self
    {
        $conexion = (new Conexion())->getConexion();
        $query = "SELECT * FROM director WHERE id = $id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();
        $resultado = $PDOStatement->fetch();
    
        return $resultado ? $resultado : null;
    }
     
    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

     
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

     
    public function getBiografia()
    {
        return $this->biografia;
    }

    public function setBiografia($biografia): self
    {
        $this->biografia = $biografia;

        return $this;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }
}