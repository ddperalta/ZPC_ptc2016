<?php
/**
array_change_key_case   — Cambia a mayúsculas o minúsculas todas las claves en un array
array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )
*/
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));

/**
array_chunk             — Divide un array en fragmentos
array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )
*/
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));


/**
array_column            — Devuelve los valores de una sola columna del array de entrada
array array_column ( array $input , mixed $column_key [, mixed $index_key = null ] )
*/
$registros = array(
    array(
        'id' => 2135,
        'nombre' => 'John',
        'apellido' => 'Doe',
    ),
    array(
        'id' => 3245,
        'nombre' => 'Sally',
        'apellido' => 'Smith',
    ),
    array(
        'id' => 5342,
        'nombre' => 'Jane',
        'apellido' => 'Jones',
    ),
    array(
        'id' => 5623,
        'nombre' => 'Peter',
        'apellido' => 'Doe',
    )
);
 
$nombres = array_column($registros, 'nombre');
print_r($nombres);

/**
array_combine           — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
array array_combine ( array $keys , array $values )
*/
$a = array('green', 'red', 'yellow');
$b = array('verde', 'rojo', 'amarillo');
$c = array_combine($a, $b);

print_r($c);


/**
array_count_values      — Cuenta todos los valores de un array
*/
$array = array(1, "hello", 1, "world", "hello", 1, 1, 1);
print_r(array_count_values($array));

/**
array_diff_assoc        — Calcula la diferencia entre arrays con un chequeo adicional de índices
array array_diff_assoc ( array $array1 , array $array2 [, array $... ] )
*/
$array1    = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2    = array("a" => "green", "yellow", "red");
$resultado = array_diff_assoc($array1, $array2);
print_r($resultado);

/**
array_diff_key          — Calcula la diferencia entre arrays empleando las claves para la comparación
array array_diff_key ( array $array1 , array $array2 [, array $... ] )
*/
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_key($array1, $array2));

/**
array_diff_uassoc       — Calcula la diferencia entre arrays con un chequeo adicional de índices que se realiza por una función de devolución de llamada suministrada por el usuario
*/



/**
array_diff_ukey         — Calcula la diferencia entre arrays usando una función de devolución de llamada en las keys para comparación
*/



/**
array_diff              — Calcula la diferencia entre arrays *VALORES*
*/
$array1    = array("a" => "green", "red", "blue", "red");
$array2    = array("b" => "green", "yellow", "red");
$resultado = array_diff($array1, $array2);

print_r($resultado);


/**
array_fill_keys         — Llena un array con valores, especificando las keys
*/
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);


/**
array_fill              — Llena un array con valores
*/
$a = array_fill(5, 6, 'banana');
print_r($a);


/**
array_filter            — Filtra elementos de un array usando una función de devolución de llamada
array array_filter ( array $array [, callable $callback [, int $flag = 0 ]] )
*/
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));


/**
array_flip              — Intercambia todas las claves de un array con sus valores asociados
*/
$entrada = array("naranjas", "manzanas", "peras");
$intercambio = array_flip($entrada);

print_r($intercambio);

/**
array_intersect_assoc   — Calcula la intersección de arrays con un chequeo adicional de índices
*/



/**
array_intersect_key     — Calcula la intersección de arrays usando sus claves para la comparación
*/



/**
array_intersect_uassoc  — Calcula la intersección de arrays con un chequeo adicional de índices que se realiza por una función de devolución de llamada
*/



/**
array_intersect_ukey    — Calcula la intersección de arrays usando una función de devolución de llamada en las claves para la comparación
*/



/**
array_intersect         — Calcula la intersección de arrays
array array_intersect ( array $array1 , array $array2 [, array $... ] )
*/
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);


/**
array_key_exists        — Verifica si el índice o clave dada existe en el array
*/
$search_array = array('first' => 1, 'second' => 4);
var_dump(array_key_exists('first', $search_array));


/**
array_keys              — Devuelve todas las claves de un array o un subconjunto de claves de un array
array array_keys ( array $array [, mixed $search_value = null [, bool $strict = false ]] )
*/
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue")); //search_value

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));


/**
array_map               — Aplica la retrollamada especificada a los elementos de cada array
*/
$a = array(1, 2, 3, 4, 5);
$b = array_map(function($n){return $n**3;}, $a);
print_r($b);


/**
array_merge_recursive   — Une dos o más arrays recursivamente
*/
$m1 = array("color" => array("favorito" => "rojo"), 5);
$m2 = array(10, "color" => array("favorito" => "verde", "azul"));
$resultado = array_merge_recursive($m1, $m2);
print_r($resultado);


/**
array_merge             — Combina dos o más arrays
*/
$array1    = array("color" => "red", 2, 4);
$array2    = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$resultado = array_merge($array1, $array2);
print_r($resultado);


/**
array_multisort         — Ordena varios arrays, o arrays multidimensionales
*/



/**
array_pad               — Rellena un array a la longitud especificada con un valor
*/



/**
array_pop               — Extrae el último elemento del final del array
*/
$stack = array("naranja", "plátano", "manzana", "frambuesa");
$fruit = array_pop($stack);
print_r($stack);
print($fruit.PHP_EOL);


/**
array_product           — Calcula el producto de los valores de un array
*/



/**
array_push              — Inserta uno o más elementos al final de un array
*/
$queue = array("naranja", "plátano");
array_push($queue, "manzana", "arándano");
print_r($queue);


/**
array_rand              — Seleccionar una o más entradas aleatorias de un array
*/
$entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
print_r(array_rand($entrada, 2));


/**
array_reduce            — Reduce iterativamente un array a un solo valor usando una función llamada de retorno
mixed array_reduce ( array $array , callable $callback [, mixed $initial = NULL ] )
                                        mixed callback ( mixed $carry , mixed $item )
*/
function suma($carry, $item)
{
    $carry += $item;
    return $carry;
}

function producto($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "suma")); // int(15)
var_dump(array_reduce($a, "producto", 10)); // int(1200), ya que: 10*1*2*3*4*5
var_dump(array_reduce($x, "suma", "No hay datos a reducir")); // string(22) "No hay datos a reducir"                                    

/**
array_replace_recursive — Reemplaza los elementos de los arrays pasados al primer array de forma recursiva
*/



/**
array_replace           — Reemplaza los elementos de los arrays pasados en el primer array
*/
$base = array("naranja", "plátano", "manzana", "frambuesa");
$reemplazos = array(0 => "piña", 4 => "cereza");
$reemplazos2 = array(0 => "uva");

$cesta = array_replace($base, $reemplazos, $reemplazos2);
print_r($cesta);


/**
array_reverse           — Devuelve un array con los elementos en orden inverso
*/
$input  = array("php", 4.0, array("verde", "rojo"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);


/**
array_search            — Busca un valor determinado en un array y devuelve la clave correspondiente en caso de éxito
*/
$array = array(0 => 'azul', 1 => 'rojo', 2 => 'verde', 3 => 'rojo');

$clave = array_search('verde', $array); // $clave = 2;
$clave = array_search('rojo', $array);  // $clave = 1;


/**
array_shift             — Quita un elemento del principio del array
*/
$stack = array("naranja", "plátano", "manzana", "frambuesa");
$fruit = array_shift($stack);
print_r($stack);


/**
array_slice             — Extrae una parte de un array
array array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] )
*/
$entrada = array("a", "b", "c", "d", "e");

$salida = array_slice($entrada, 2);      // devuelve "c", "d", y "e"
$salida = array_slice($entrada, -2, 1);  // devuelve "d"
$salida = array_slice($entrada, 0, 3);   // devuelve "a", "b", y "c"

print_r(array_slice($entrada, 2, -1));
print_r(array_slice($entrada, 2, -1, true));


/**
array_splice            — Elimina una porción del array y la reemplaza con algo
*/



/**
array_sum               — Calcular la suma de los valores de un array
*/



/**
array_udiff_assoc       — Computa la diferencia entre arrays con una comprobación de indices adicional, compara la información mediante una función de llamada de retorno
*/



/**
array_udiff_uassoc      — Computa la diferencia entre arrays con una verificación de índices adicional, compara la información y los índices mediante una función de llamada de retorno
*/



/**
array_udiff             — Computa la diferencia entre arrays, usando una llamada de retorno para la comparación de datos
*/



/**
array_uintersect_assoc  — Calcula la intersección de arrays con una comprobación de índices adicional, compara la información mediante una función de retrollamada
*/



/**
array_uintersect_uassoc — Calcula la intersección de arrays con una comprobación de índices adicional, compara la información y los índices mediante funciones de retrollamada por separado
*/



/**
array_uintersect        — Computa una intersección de arrays, compara la información mediante una función de llamada de retorno
*/



/**
array_unique            — Elimina valores duplicados de un array
*/



/**
array_unshift           — Añadir al inicio de un array uno a más elementos
*/
$queue = array("naranja", "banana");
array_unshift($queue, "manzana", "frambuesa");
print_r($queue);


/**
array_values            — Devuelve todos los valores de un array
*/
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));


/**
array_walk_recursive    — Aplicar una función de usuario recursivamente a cada miembro de un array
*/



/**
array_walk              — Aplicar una función proporcionada por el usuario a cada miembro de un array
*/



/**
array                   — Crea un array
*/



/**
arsort                  — Ordena un array en orden inverso y mantiene la asociación de índices
*/



/**
asort                   — Ordena un array y mantiene la asociación de índices
*/



/**
compact                 — Crear un array que contiene variables y sus valores
*/



/**
count                   — Cuenta todos los elementos de un array o algo de un objeto
int count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] ) // COUNT_RECURSIVE
*/



/**
current                 — Devuelve el elemento actual en un array
*/



/**
each                    — Devolver el par clave/valor actual de un array y avanzar el cursor del array
*/



/**
end                     — Establece el puntero interno de un array a su último elemento
*/



/**
extract                 — Importar variables a la tabla de símbolos actual desde un array
*/



/**
in_array                — Comprueba si un valor existe en un array
*/
$array = array(
    'egg' => true,
    'cheese' => false,
    'hair' => 765,
    'goblins' => null,
    'ogres' => 'no ogres allowed in this array'
);

// Loose checking -- return values are in comments

// First three make sense, last four do not

var_dump(in_array(null, $array, true)); // true
var_dump(in_array(false, $array, true)); // true
var_dump(in_array(765, $array, true)); // true
var_dump(in_array(763, $array, true)); // true
var_dump(in_array('egg', $array, true)); // true
var_dump(in_array('hhh', $array, true)); // true
var_dump(in_array(array(), $array, true)); // true

/**
key_exists              — Alias de array_key_exists
*/



/**
key                     — Obtiene una clave de un array
*/



/**
krsort                  — Ordena un array por clave en orden inverso
*/



/**
ksort                   — Ordena un array por clave
*/



/**
list                    — Asignar variables como si fueran un array
*/
$info = array('mezcal', 'amarillo', 'tang');

// Enumerar todas las variables
list($bebida, $color, $mezcla) = $info;
echo "El $bebida es $color y con $mezcla queda muy bien\n";


/**
natcasesort             — Ordenar un array usando un algoritmo de "orden natural" insensible a mayúsculas-minúsculas
*/



/**
natsort                 — Ordena un array usando un algoritmo de "orden natural"
*/



/**
next                    — Avanza el puntero interno de un array
*/



/**
pos                     — Alias de current
*/



/**
prev                    — Rebobina el puntero interno del array
*/



/**
range                   — Crear un array que contiene un rango de elementos
*/
range(0, 100, 10);
array_combine(range(11,14),range(1,4));

/**
reset                   — Establece el puntero interno de un array a su primer elemento
*/



/**
rsort                   — Ordena un array en orden inverso //true o false
*/
$fruits = array("limón", "naranja", "plátano", "manzana");
rsort($fruits);

/**
shuffle                 — Mezcla un array
*/



/**
sizeof                  — Alias de count
*/



/**
sort                    — Ordena un array

SORT_REGULAR       - compara elementos normalmente (no cambia los tipos)
SORT_NUMERIC       - compara elementos de forma numérica
SORT_STRING        - compara elementos como cadenas
SORT_LOCALE_STRING - compara elementos como cadenas, basándose en la configuración regional en uso. Utiliza la configuración regional, la cual puede cambiarse usando setlocale().
SORT_NATURAL       - compara elementos como cadenas usando el "orden natural" de la misma forma que natsort().
SORT_FLAG_CASE     - se puede combinar (OR a nivel de bits) con SORT_STRING o SORT_NATURAL para ordenar cadenas de forma insensible a mayúsculas/minúsculas.
*/
$frutas = array("limón", "naranja", "banana", "albaricoque");
sort($frutas);


/**
uasort                  — Ordena un array con una función de comparación definida por el usuario y mantiene la asociación de índices
*/



/**
uksort                  — Ordena un array según sus claves usando una función de comparación definida por el usuario
*/



/**
usort                   — Ordena un array según sus valores usando una función de comparación definida por el usuario
bool usort ( array &$array , callable $value_compare_func )
                         int callback ( mixed $a, mixed $b )
*/
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $clave => $valor) {
    echo "$clave: $valor\n";
}

