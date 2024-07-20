<?php
// echo "hola mundo";

// tipado dinamico, debil y gradual

// camelCase nombreApellido SI
// kebab -> name-name NO
// snake_case -> name_name SI

// string
$nombres = "Gonzalo Alex";
// boolean
$isDev = true;
// int
$age = 18;
//mixed
$day = '15' + 8; // los suma 15+8=23

// interpolacion de cadenas con "
$output = "Me llamo $nombres y tengo $age años.";

// interpolacion de cadenas con ' --> no funciona
$output2 = 'Me llamo $nombres y tengo $age años.';

// Concatenar
$newName = $nombres . " Ramos";

// concatenar nuevo al viejo
$output2 .= "Texto adicional con '.='";

// escapar simbolos para mostrarlos
$output3 = "Me llamo $nombres y mi edad es de $age y me dicen \"El capo\"";

// Constantes -> Locales y Globales
// No funcionan en tiempo de ejecucion
// Globales
// define ("nombreConst", "valorConst");
define("id", "446333");
// Locales -> sin dolar
const NOMBRE = "Carlitos";

// comparaciones
$esMayor = $age < 23;
$saberSiNoEsDev = !$isDev;
$saberSiLosDosCumplen = true && true;

// if
$isOld = true;
if ($isOld) {
    echo "<h2>Sos viejo pa</h2>";
} elseif ($isdev) {
    // else if o elseif es valido
}

// ternaria
$nuevoValor = $isOld ? "Sos viejo" : "Sos joven";

// match
// compara parametro con los valores de adentro
$nuevaSalida = match ($age) {
    // lo de aca devuelve un valor y se guarda en nuevaSalida
    // pattern maching
    // el que cumple, se guarda
    0, 1, 2 => "Sos un bebe, $nombres",
    3, 4, 5, 6, 7, 8 => "Sos un niño $nombres",
    default => "Sos un adulto"
};

// evaluando expresiones
// en la primera que coincide, elege
$nuevaSalida2 = match (true) {
    $age < 2 => "bebe", // esta expresion, evalua true? (true de arriba)
    $age < 10  => "niño (match)",
    $age == 18 => "mayor (match)",
    $age >= 40 => "adulto (match)",
    default    => "Viejardo (match)"
};

// arrays
$bestLanguagues = ["PHP", 1, true,];
// accedemos sin pasar posición, pone java al final
$bestLanguagues[] = "Java";
// accedemos pasando posición, reemplaza si esta ocupado
$bestLanguagues[1] = "Java"; // cambia 1 por "java"

// arrays asociativos key:value 
$person = [
    "name" => "Lewis",
    "surname" => "Hamilton",
    "number" => 44,
    "languagues" => ["php", "java", "js"]
];
$person["name"] = "George";
$person["languagues"][] = "laravel"; // sumamos uno a languagues

// indica tipo de dato y valor en pantalla
var_dump($isDev);
// bool(true)

// indica solo tipo de dato, usar con echo
echo gettype($age);

// etiqueta de cierra -> opcional, pero buena practica 
?>

<h2><?= $nuevoValor; ?></h2>
<h2><?= $nuevaSalida2; ?></h2>
<h3><?= $bestLanguagues[1]; ?></h3>

<!-- RECORRER ARRAY -->
<ul>
    <?php foreach ($bestLanguagues as $languague) : ?>
        <li><?= $languague ?> </li>
    <?php endforeach; ?>
</ul>

<!-- CONSEGUIR INDICE -->
<ul>
    <?php foreach ($bestLanguagues as  $key => $languague) : ?>
        <li><?= $key . " " . $languague ?> </li>
    <?php endforeach; ?>
</ul>

<!-- sintaxis alternativa IF -->
<?php if ($isOld) : ?>
    <h2>Sos viejo</h2>
<?php elseif ($isDev) : ?>
    <!-- else if | no es valido aca -->
    <h2>Sos dev</h2>
<?php else : ?>
    <h2>Sos joven!</h2>
<?php endif; ?>


<h1>
    <?= $newName; ?>
</h1>

<p>
    <?= $output; ?>
</p>
<p>
    <?= $output2; ?>
</p>
<p>
    <?= $output3; ?>
</p>

<!-- <p>
    <?= "Me llamo " . $nombres . " y tengo " . $age . " años. <script>alert('ojo')</script> capo"; ?>
</p> -->