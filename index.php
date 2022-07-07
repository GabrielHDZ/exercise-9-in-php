<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Persona{
    //declaracion de propiedades
    private $edad;
    private $nombre;
    private $telefono;

    //constructor
    public function __construct($edad=0,$nombre="",$telefono=0){
        $this->edad=$edad;
        $this->nombre=$nombre;
        $this->telefono=$telefono;
    }

    //getters and setters
    public function getEdad(){
        return $this->edad;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono ;
    }
}

class Cliente extends Persona{
    private $credito;
    public function __construct($edad=0,$nombre="",$telefono=0,$credito=0){
        $this->edad=$edad;
        $this->nombre=$nombre;
        $this->telefono=$telefono;
        $this->credito=$credito;
    }
    function getCredito(){
        return $this->credito;
    }
    function setCredito($credito){
        $this->credito=$credito;
    }
}

class Trabajador extends Persona{
    private $salario;
    function __construct($edad=0,$nombre="",$telefono=0,$salario=0){
        $this->edad=$edad;
        $this->nombre=$nombre;
        $this->telefono=$telefono;
        $this->salario=$salario;
    }
    function getSalario(){
        return $this->salario;
    }
    function setSalario($salario){
        $this->salario=$salario;
    }
}
$cliente1=new Cliente();
$cliente1->setNombre("Carlos");
$cliente1->setEdad(33);
$cliente1->setTelefono(2345566);
$cliente1->setCredito(1234444);
echo("Nombre del cliente: {$cliente1->getNombre()},con edad: {$cliente1->getEdad()}, numero telefonico: {$cliente1->getTelefono()}, y numero de credito: {$cliente1->getCredito()}");
?>
<br>
<?php
$trabajador1=new Trabajador();
$trabajador1->setNombre("Marcos");
$trabajador1->setEdad(45);
$trabajador1->setTelefono(5568565);
$trabajador1->setSalario(3948);
echo("Nombre del trabajador: {$trabajador1->getNombre()},con edad: {$trabajador1->getEdad()}, numero de telefono: {$trabajador1->getTelefono()}, con salario:$ {$trabajador1->getSalario()}");


?>
</body>
</html>

