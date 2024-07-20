<?php

// waos
echo "hola pibes \n\n";
 
/*
    waos x 2
*/
$nombre = "neko arc";
$numero = 666;
echo $nombre . 'waos'; // se concatena con .
echo gettype($nombre);
echo '<br>' . "Se concatena usando $nombre y tiene $numero años" . '<br>';

/* efectivamente hay tipado dinámico
$nombre = 6;
echo $nombre;
echo gettype($nombre);
*/


// Constantes
const CONSTANTE = "Sizas pa, hay constantes";
echo CONSTANTE . '<br>';


// Listas
$lista = ['0papu', '1sdfsbdfs', '2shbfhjbvjf'];  // es array
echo $lista[2] . '<br>';    // acceso

array_push($lista, '3cosanueva'); // append
print_r($lista); // print recursivo
echo '<br>';


// Diccionarios
$dicc = [
    'sapo' => 'sisoy',
    'es_verdad' => true,
];   // técnicamente es un array que relacion claves y valores
echo $dicc['es_verdad'] . '<br>'; // los bool se imprimen como numero
print_r($dicc);


// Set
$set = array_unique($lista); // se inicializa con otra array normal, devuelve un array normal
// simplemente filtra los duplicados, pero algo es algo


// Ciclos
for ($i=0; $i < 11; $i++) {  // los de java
    echo $i . '<br>';
}

foreach ($lista as $item) { // los for GOD
    echo $item . '<br>';
}

$j = 0;
$parimpar = '';
while ($j <= 10) {
    echo "sapoperro #$j ";  // no se puede formatear con ' 

    // Condicionales
    if ($j % 2 == 0 && $j != 6) { // con && y ||
        $parimpar = 'par';
    } elseif ($j == 6) {
        echo "666 el numero de los geis ";
    } else {
        $parimpar = 'impar';
    }
    echo "es $parimpar" . '<br>';

    $j++;
}


// Funciones
function sexo(int $args): void {  // tipo de parámetro y retorno es opcional
    for ($i=0; $i < $args; $i++) { 
        echo "sexo $i" . '<br>';
    }
}
sexo(5);


// Clases
class Pibe
{
    public $nombre;
    public $años; // se podrá la ñ?

    // y con parámetros opcionales, hmm...
    public function __construct(string $nombre, int $años = null) {
        $this->nombre = $nombre;
        //$this->años = $años | 10; // si es null pues pone 10, no? | R: NO
        if ($años == null) {
            $this->años = 10;
        } else {
            $this->años = $años;
        }
        
    }
}

$el_joven = new Pibe('Jonathan XD', 20);
print_r($el_joven); echo '<br>';
$el_cock = new Pibe('Cock');
print_r($el_cock);

echo '<br>' . $el_cock->nombre;
$el_cock->nombre = 'Miguel';
echo '<br>' . $el_cock->nombre;

?>