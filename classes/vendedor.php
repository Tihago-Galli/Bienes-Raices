<?php 

namespace App;

class Vendedor extends ActiveRecord{

    protected static $tabla = "vendedores";

    protected static $columnasDB = ['id','nombre','apellido', 'telefono', 'email', 'imagen'];


    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;
    public $imagen;

    public function __construct($array = [])
    {
            $this->id = $array['id'] ?? NULL;
            $this->nombre = $array['nombre'] ?? '';
            $this->apellido = $array['apellido'] ?? '';
            $this->telefono = $array['telefono'] ?? '';
            $this->email = $array['email'] ?? '';
            $this->imagen = $array['imagen'] ?? '';
           
        
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = 'Debes añadir un nombre';
          }
          if(!$this->apellido){
            self::$errores[] = 'Debes añadir un apellido';
          }

          if(!$this->telefono){
            self::$errores[] = 'Debes añadir un telefono';
          }

          if(!preg_match('/[0,9]/', $this->telefono)){
            self::$errores[] = 'Formato no valido';
          }
          if(!$this->email){
            self::$errores[] = 'Debes añadir un email';
          }
          

          return self::$errores;
        }
        
}
