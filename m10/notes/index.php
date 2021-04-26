<?="<div>Hello World</div>";

//variables

$alpha = 5;

echo $alpha;

// string interpolation

echo '<div> I have $alpha items for sale</div>';
echo "<div> I have $alpha items for sale</div>";
echo "<div> I have ".$alpha." items for sale</div>";
?>
<?= $alpha //echo ?>
<hr>
<?
//float
$fl = 0.333;
// integer
$int = 3;

$al = "String Value";

// Boolean
$bool = false;

//modulus = %
echo ($fl + $int;) * 5;

$firstname = "Micheal";
$lastname = "Cat";
$fullname = "fistname $lastname";
echo "$firstname";

?>
<hr>
<?
// superglobal variable
echo "<div>My name is {$_GET['name']}. I like {$_GET['like']}</div>";
?>
<hr>
<?
//arrays
$colors = array("red","green","blue");

echo $colors[1]."<br>";

echo count($colors)."<br>";

//associative array

$assoc =[
      "red" => "#f00",
      "green" => "#0f0",
      "blue" => "#00f"
];

echo $assoc['green']."<br>";

?>
<div style="color:<?=$assoc['green'] ?>; text-transform: uppercase;">This is green</div>
<hr>
<?
//casting
$c = "$alpha";
$d = $c*1;

echo "<hr>";

echo $colors;
echo "<hr>";

print_r($colors);

function print_p($v) {
	echo "<pre>", print_r($v),"</pre>";
}

print_p($colors);

?>









