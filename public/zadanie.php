<?php
echo "1 part";
echo "<br>";
echo "<br>1 ";
$a = 5;
$b = $a;
echo "Вторая переменная: $b";

echo "<br>";
echo "<br>2 ";

$a = 10;
$b = 2;
echo("Сумма a и b: $a+$b = ");
echo($a+$b);
echo "<br>";
echo("Разность a и b: $a-$b = ");
echo($a-$b);
echo "<br>";
echo("Произведение a и b: $a*$b = ");
echo($a*$b);
echo "<br>";
echo("Деление a и b: $a/$b = ");
echo($a/$b);
echo "<br>";
echo "<br>3 ";
$c = 15;
$d = 2;
echo("Сумма c и d: $c+$d = ");
$result = $c+$d;
echo($result);
echo "<br>";
echo "<br>4 ";
$a = 10;
$b = 2;
$c = 5;
echo("Среднее значение: $a,$b,$c = ");
echo(($a+$b+$c)/3);
echo "<br>";
echo "<br>5 ";
$a = 17;
$b = 10;
$d = 17;
echo("Разность a и b: $a-$b = ");
$c = $a - $b;
echo($c);
echo("Сумма c и d: $c+$d = ");
$result = $c+$d;
echo($result);
echo "<br>";
echo "<br>";
echo "2 part";
echo "<br>";
echo "<br>1 ";
$text="Привет, Мир!";
echo("$text Моя первая программа");
echo "<br>";
echo "<br>2 ";

$text1="Привет, ";
$text2="Мир!";
$text1 .=$text2;
echo ($text1);
echo "<br>";
echo "<br>3 ";

$name="Тюпин Владислав";
echo("Привет, $name");
$text="Новый текст";
echo "<br>";
echo "<br>4 ";
$age = 19;
$height = 183;
echo("Мой возраст: $age | Мой рост: $height");
echo "<br>";
echo "<br>5 ";
$text1 = "abcde";
echo($text1[0]);
echo($text1[2]);
echo($text1[4]);
echo "<br>";
echo "<br>";
echo "3 part";
echo "<br>";
echo "<br>1 ";
$arr = ['a','b','c'];
var_dump($arr);
echo "<br>";
var_dump($arr[0]);
var_dump($arr[1]);
var_dump($arr[2]);
echo "<br>";
echo "<br>2 ";
$v = "$arr[0],$arr[1],$arr[2]";
echo($v);
echo "<br>";
echo "<br>3 ";
$arr = ['a','b','c','d'];
$v1 = "$arr[0] + $arr[1],$arr[2] + $arr[3],$arr[0] - $arr[3],$arr[0] / $arr[3]";
echo($v1);
echo "<br>";
echo "<br>4 ";
$arr = [2,5,3,9];
$r1 = $arr[0] * $arr[1];
$r2 = $arr[2] * $arr[3];
$result = $r1 + $r2;
echo($result);
echo "<br>";
echo "<br>";
echo "4 part";
echo "<br>";
echo "<br>1 ";
$arr = ['a'=>11, 'b'=>20, 'c'=>30];
echo "c: ";
echo($arr['c']);
echo "<br>";
echo "Сумма: ";
echo($arr['a'] + $arr['b'] + $arr['c']);
echo "<br>2 ";
echo(array_sum($arr));
echo "<br>3 ";
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo "Коля: ";
echo($arr['Коля']);
echo "<br>";
echo "Петя: ";
echo($arr['Петя']);
echo "<br>";
echo "<br>4 ";
$arr = ['1'=>'Январь', '2'=>'Февраль', '3'=>'Март', '4'=>'Апрель', '5'=>'Май', '6'=>'Июнь',
    '7'=>'Июль', '8'=>'Август', '9'=>'Сентябрь', '10'=>'Октябрь', '11'=>'Ноябрь', '12'=>'Декабрь'];
echo($arr['9']);
echo "<br>";
echo($arr['6']);
echo "<br>";
echo "<br>5 ";
$day = 5;
$arr = ['1'=>'Понедельник', '2'=>'Вторник', '3'=>'Среда', '4'=>'Четверг', '5'=>'Пятница', '6'=>'Суббота',
    '7'=>'Воскресенье'];
echo($arr[$day]);

