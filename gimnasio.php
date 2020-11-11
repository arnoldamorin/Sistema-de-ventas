<?php
    class Clase{    
        public $nombre;
        public $entrenador;
        public $aAlumnos = array();
        
        public function __construct(){
            
            $this->aAlumnos = array();
        }
        
        function asignarEntrenador($entrenador){
            $this->entrenador=$entrenador;
        }
        function inscribirAlumno($alumno){
           array_push($this->aALumnos,$alumno);
        }
        function imprimirListado(){
            print_r($this);
            echo "<table class='table table-bordered'>";
            echo "<thead><tr><th>Clase - $this->nombre</th></tr></thead>";
            echo "<tbody>";
            echo "<tr><td>Entrenador:$this->entrenador</td><tr/>";
            echo "</tbody>";
            echo "</table>";
        }
    }
    abstract class Persona{
        protected $dni;
        protected $nombre;
        protected $correo;
        protected $celular;
        function imprimir(){
            print_r($this);
        }

        public function __get($propiedad){
            return $this->$propiedad;
        }
        public function __set($propiedad,$valor){
            $this->propiedad = $valor;
            return $this;
        }
        
        public function __construct($dni,$nombre,$correo,$celular){
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->celular = $celular;
        }
    }
    class Alumno extends Persona{
        private $fechaNac;
        private $peso;
        private $altura;
        private $aptoFisico;
        private $presentismo;
        function __construct($dni,$nombre,$correo,$celular,$fechaNac){
            parent::__construct($dni,$nombre,$correo,$celular);
            $this->peso = 0.0;
            $this->altura = 0.0;
            $this->aptoFisico = 0.0;
            $this->presentismo = 0.0;
        }

        function setFichaMedica($peso,$altura,$aptoFisico){
            $this->peso =$peso;
            $this->altura = $altura;
            $this->aptoFisico = $aptoFisico;

        }
    }
    class Entrenador extends Persona{
        public $aClases;
        function __construct($dni,$nombre,$correo,$celular){
            parent::__construct($dni,$nombre,$correo,$celular);
            $this->aClases = [];
        }
        public function __get($propiedad){
            return $this->$propiedad;
        }
        public function __set($propiedad,$valor){
            $this->propiedad = $valor;
            return $this;
        }
    }
    $entrenador1 = new Entrenador("34987789","Miguel Ocampo","miguel@mail.com","11678634");
    $entrenador2 = new Entrenador("29987589","Andrea Zarate","andrea@mail.com","11768654");
    
   $alumno1 = new Alumno("40787657","Dante Montera","dante@mail.com","1145632457","1997-08-28");
    $alumno1->setFichaMedica("90","178","1");
    $alumno1->presentismo = 78;
    
    $alumno2 = new Alumno("46766547","Darío Turchi","dario@mail.com","1145652457","1986-11-21");
    $alumno2->setFichaMedica("73","1.68","0");
    $alumno2->presentismo=68;
    
    $alumno3 = new Alumno("39765454","Facundo Fagnano","facundo@mail.com","1145632457","1993-02-06");
    $alumno3->setFichaMedica("90","1.87","1");
    $alumno3->presentismo=88;
    
    $alumno4 = new Alumno("41687536","Gastón Aguilar","gaston@mail.com","1145632457","1999-11-02");
    $alumno4->setFichaMedica("70","1.69","0");
    $alumno4->presentismo=98;
        
    $clase1 = new Clase();
    $clase1->nombre = "Funcional";
    $clase1->asignarEntrenador($entrenador1);
    $clase1->inscribirAlumno($alumno1);
    $clase1->inscribirAlumno($alumno3);
    $clase1->inscribirAlumno($alumno4);
    $clase1->imprimirListado();

    $clase2 = new Clase();
    $clase2->nombre = "Zumba";
    $clase2->asignarEntrenador($entrenador2);
    $clase2->inscribirAlumno($alumno1);
    $clase2->inscribirAlumno($alumno2);
    $clase2->inscribirAlumno($alumno3);
    $clase2->imprimirListado();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        $clase1->imprimirListado();
    ?>
</body>
</html>