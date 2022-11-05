<?php

// Conditionals:
$color="red";

if($color=="green"){
    echo "The color is red";
}else{
    echo "The color is not red";
};

// Comparation operators:
// == === != <> !== < > <= >=

echo "<hr>";

$year=2019;
if ($year==2019) {
    echo "We are in 2019";
} else {
    echo "We are not in 2019";
}

echo "<hr>";

$nombre="Matias Bueno";
$edad=31;
$mayoriaEdad=18;
$ciudad="Buenos Aires";
$continente="America del Sur";
if ($edad>$mayoriaEdad) {
    echo "<p>$nombre es mayor de edad <p>";
    echo "<p>$nombre vive en $ciudad.</p>";
    if ($continente=="Europa") {
        echo "<p>$ciudad pertenece al continente: $continente</p>";
    } else {
        echo "<p>$ciudad no pertenece a Europa</p>";
    };
};

echo "<hr>";

$day=6;
if ($day==1) {
    echo "<p>Today is Monday.</p>";
} else {
    if ($day==2) {
        echo "<p>Today is Tuesday.</p>";
    } else {
        if ($day==3) {
            echo "<p>Today is Wednesday.</p>";
        } else {
            if ($day==4) {
                echo "<p>Today is Thursday.</p>";
            } else {
                if ($day==5) {
                    echo "<p>Today is Friday.</p>";
                } else {
                    if ($day==6 || $day==7) {
                        echo "<p>Today is Weekend.</p>";
                    } else {
                        
                    }
                }
            }
        }
    }
    
};

echo "<hr>";

if ($day==1) {
    echo "<p>Today is Monday.</p>";
} elseif ($day==2) {
    echo "<p>Today is Tuesday.</p>";
} elseif ($day==3) {
    echo "<p>Today is Wednesday.</p>";
} elseif ($day==4) {
    echo "<p>Today is Thursday.</p>";
} elseif ($day==5) {
    echo "<p>Today is Friday.</p>";
} elseif ($day>=6) {
    echo "<p>Today is Weekend.</p>";
};

echo "<hr>";

switch ($day) {
    case 1:
        echo "<p>Today is Monday.</p>";
        break;
    case 2:
        echo "<p>Today is Tuesday.</p>";
        break;
    case 3:
        echo "<p>Today is Wednesday.</p>";
        break;
    case 4:
        echo "<p>Today is Thursday.</p>";
        break;
    case 5:
        echo "<p>Today is Friday.</p>";
        break;
    default:
        echo "<p>Today is Weekend.</p>";
        break;
};

echo "<hr>";

// GO TO
goto marca;
echo "<h3>Instruccion 1.</h3>";
echo "<h3>Instruccion 2.</h3>";
echo "<h3>Instruccion 3.</h3>";
echo "<h3>Instruccion 4.</h3>";
marca:
echo "<h3>Instrucción 5</h3>";
?>