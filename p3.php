<html>
<head>
<title> Operadores </title>
</head>
<body>
<?php



function operadores_aritmeticos(){
$a=14;
$b=28;
$sum=$a+$b;
$res=$a-$b;
$mul=$a*$b;
$div=$a/$b;
echo "Pruebas con los operadores aritmeticos<br>";
echo "a es $a y b es $b<br>";
echo "La suma de a+b es  $sum<br>";
echo "La resta de a-b es $res<br>";
echo "La multiplicacion de a*b es $mul<br>";
echo "La division de a/b es $div<br>";
}
operadores_aritmeticos();

echo "<br>";

function operadores_Incremento(){
$a=1;
$b=7;
$c=9;
$d=25;
$posin=$a++;
$prein=++$b;
$posde=$c--;
$prede=--$d;
echo "Pruebas con los operadores de incremento y decremento<br>";
echo "La variable a vale $posin y con un posincremento vale $a<br>";
echo "La variable b vale $prein y con un preincremento vale $b<br>";
echo "La variable c vale $posde y con un posdecremento vale $c<br>";
echo "La variable d vale $prede y con un predecremento vale $d<br>";
}
operadores_Incremento();

echo "<br>";

function operadores_Condicionales(){
$a=1;
$b=7;
$c=9;
$d=25;
$e=9;
$f=-4;
$ig=$c==$e;
$dis=$f<>$d;
echo "Pruebas con los operadores condicionales<br>";
echo " a vale $a, b vale $b, c vale $c, d vale $d, e vale $e y f vale $f<br>";
echo "La variables c y e son igual $ig de otro<br>";
echo "La variables f y d son distintos $dis de otro<br>";
}
operadores_Condicionales();


?>
</body>
</html>
