<!DOCTYPE html>
<html>
<body>

<?php

class Gato {
    public $color;
    public $edad;
    public $raza;
    public $nombre;

    // Constructor de la clase
    function __construct($color, $edad, $raza, $nombre) {
        $this->color = $color; 
        $this->edad = $edad; 
        $this->raza = $raza;
        $this->nombre = $nombre; 
    }         

    // Método para mostrar la información del gato
    function mostrarInfo() { 
        echo "Nombre: {$this->nombre}, Edad: {$this->edad}, Color: {$this->color}, Raza: {$this->raza}"; 
    }   
} 

// Crear una instancia de la clase Gato
$gato1 = new Gato("Negro", 5, "Siamés", "Whiskers"); 

// Mostrar la información del gato
$gato1->mostrarInfo(); 
?>


</body>
</html>
