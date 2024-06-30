<?php

require_once('Conexion.php');
require_once('Categoria.php');
require_once('Director.php');

class Pelicula{
    protected $id;
    protected $img;
    protected $nombre;
    protected $director_id;
    protected $categoria_id;
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

    public function directorMayuscula($director){
        $directorConMayuscula = ucfirst($director);
        return $directorConMayuscula;
    }

    public function nombreMayuscula($nombre){
        $nombreConMayuscula = ucwords($nombre);
        return $nombreConMayuscula;
    }

    
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

    public function add($nombre, $categoria_id, $director_id, $trailer, $sinopsis, $portada, $precio): int
    {
            try {
                $conexion = (new Conexion()) -> getConexion();
                $query = "INSERT INTO `peliculas` (`id`, `nombre`, `categoria_id`, `director_id`, `trailer`, `sinopsis`, `img`, `precio`) VALUES (NULL, :nombre, :categoria_id, :director_id, :trailer, :sinopsis, :portada, :precio)";
                $PDOStatement = $conexion->prepare($query);
                $PDOStatement->execute([
                    'nombre' => htmlspecialchars($nombre),
                    'categoria_id' => htmlspecialchars($categoria_id),
                    'director_id' => htmlspecialchars($director_id),
                    'trailer' => htmlspecialchars($trailer),
                    'sinopsis' => htmlspecialchars($sinopsis),
                    'portada' => htmlspecialchars($portada),
                    'precio' => htmlspecialchars($precio),
                ]);
                return $conexion->lastInsertId();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
    }

    public function delete(){
        $conexion = (new Conexion()) -> getConexion();
        $query = "DELETE FROM peliculas WHERE id = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            "id" => htmlspecialchars($this->id)
        ]);
    }

    public function edit($nombre, $categoria_id, $director_id, $trailer, $sinopsis, $precio, $id){
        $conexion = (new Conexion()) -> getConexion();
        $query = "UPDATE `peliculas` SET `nombre` = :nombre, `categoria_id` = :categoria_id, `director_id` = :director_id, `trailer` = :trailer, `sinopsis` = :sinopsis, `precio` = :precio WHERE `peliculas`.`id` = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            'nombre' => htmlspecialchars($nombre),
            'categoria_id' => htmlspecialchars($categoria_id),
            'trailer' => htmlspecialchars($trailer),
            'sinopsis' => htmlspecialchars($sinopsis),
            'director_id' => htmlspecialchars($director_id),
            'precio' => htmlspecialchars($precio),
            "id" => htmlspecialchars($id)
        ]);
    }

    public function reemplazarImagen($portada, $id){
        $conexion = (new Conexion()) -> getConexion();
        $query = "UPDATE peliculas SET img=:portada WHERE id = :id";
        $PDOStatement = $conexion->prepare($query);
        $PDOStatement->execute([
            "portada" => $portada,
            "id" => $id
        ]);
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

    public function getDirector_id()
    {
        $director = (new Director())->catalogodirector($this->director_id);
        return $director->getNombre();
    }
 
    public function getCategoria_id()
    {
        $categoria = (new Categoria())->catalogoCategoria($this->categoria_id);
        return $categoria->getNombre();
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
