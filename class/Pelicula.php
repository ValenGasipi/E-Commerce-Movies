<?php

require_once('Conexion.php');

class Pelicula{
    protected $id;
    protected $img;
    protected $nombre;
    protected $director;
    protected $categoria;
    protected $sinopsis;
    protected $precio;
    protected $trailer;

    public function catalogoCompleto(){
        $catalogo = [];
        $conexion = (new Conexion()) -> getConexion();
        $query = 'SELECT * FROM peliculas';

        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, Pelicula::class);
        $PDOStatement->execute();

        while($pelicula = $PDOStatement->fetch()){
            $catalogo []= $pelicula;
        }

        return $catalogo;
}

    // Catalogo_x_id
    public function catalogoPorId($id){
        $peliculas = $this->catalogoCompleto();
        
        foreach ($peliculas as $producto) {
            if($producto->id == $id){
                return $producto;
            }
        }
        return[];
    }

    // Catalogo_x_personaje
    public function catalogoCategoria(int $categoria_id) :array
    {
        $categorias = [];
        $conexion = ( new Conexion() )->getConexion();
        $query = "SELECT * FROM peliculas WHERE categoria_id = $categoria_id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatement->execute();

        $categorias = $PDOStatement->fetchAll();

        return $categorias;
    }


    public function categoriaMayuscula($Categoria){
        $categoriaConMayuscula = ucfirst($Categoria);
        return $categoriaConMayuscula;
    }

    public function nombreMayuscula($nombre){
        $nombreConMayuscula = ucfirst($nombre);
        return $nombreConMayuscula;
    }

    // Cualquier cosa a modificar video 19/4 minuto 36:30
    public function recortarDescripcion($texto){
            $arrayTexto = explode(" ", $texto);//al devolver un array indexado, sus claves son numericas y sirve para acortar la descripcion
            $textoAcortado  = [];
            foreach ($arrayTexto as $key => $value) {
                if ($key < 20) {
                    $textoAcortado []= $value;
                }else{
                    break;
                }
            }
            return implode(" ", $textoAcortado).'...';
        }

        //Get - Sirven para obtener el valor del atributo
        //Set - Sirven para cambiar el valor del atributo
 
    public function getId()
    {
        return $this->id;
    }

    public function getImagen()
    {
        return $this->img;
    }
 
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDirector()
    {
        return $this->director;
    }
 
    public function getCategoria()
    {
        return $this->categoria;
    }
 
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
    public function getTrailer()
    {
        return $this->trailer;
    }
 
   
    }
