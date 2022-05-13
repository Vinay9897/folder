<?php

// Single Quoted 
$str1 = 'This is my \'first string'; 
echo $str1."<br>" ;

$str1 = 'This is my \\\'first string'; 
echo $str1."<br>";

$str1 = 'Backslash and Quote: \\\'';
echo $str1."<br>";

// Double Quoted


$str1 = "This is my first string\n" ; 
echo $str1;

$str1 = "This is my first string\n" ; 
echo $str1."<br>";

// echo "<br>";
// echo "<br>";
// echo "<br>";
// $a = 'vinay';
// echo "this is $a";
// echo "<br>";
// echo "{$a}";

//--------------------Now doc

// $stri = <<<'MYSTRING'
// I'm a nowdoc string
//     Start with token with single quotes
// Did you notice that I can write '' without escaping?
// I don't have special meaning for \n, \r and \t
// I do not parse variables $name
// MYSTRING;
// echo '<pre>' . $stri . '</pre>';

//-------------------------- Here Doc

// $name = 'Akash';
// $string = <<< STR
// I'm a heredoc
// I parse variables. (I love $name)
// \t \\t adds a tab space. That means I accept escape sequences
// STR;
// echo '<pre>' . $string . '</pre>';

//---------------------var_dump() function

// $c = "Vinay";
// var_dump($c);
// echo "<br>";
// echo var_dump($c);
// echo "<br>";
// $arr = array(1,2,3,5);
// print_r($arr);
// echo "<br>";

// -----------------------Type Casting
// $x = 2;
// $y = 4;

// var_dump($x/$y);
// echo "<br>";
// var_dump($y/$x);
// echo "<br>";

// $s = "10Vinay";
// $s1 = (int)$s;
// var_dump($s1);

//casting to bool
// $a = (bool)null;
// echo "<br>";
// var_dump($a);
// echo "<br>";
// $b = (bool)'';
// var_dump($a);
// echo"<br>";

// $b = (bool)'hello';
// echo "<br>";
// var_dump($b);

// $c = (bool)"my name";
// echo "<br>";
// var_dump($c);

// $d = (bool)0;
// echo "<br>";
// var_dump($d);

// $e = (bool)45;
// echo "<br>";
// var_dump($e);

// $f = (bool)4.0;
// echo "<br>";
// var_dump($e);

// PHP Explicit Casting to Array


// $a = (array) 5;
// $b = (array) 'Hello'; 
// $c = (array) true;
// var_dump($a); // [5]
// var_dump($b); // ['Hello']
// var_dump($c); // [true]

//-----------------------function

// echo "<br>";
// function say()
// {
//     echo "hello<br>";
// }

// $value = "say";
// say();


$var2 = "hello";  
function f1()
{
    global $var2;
echo "variable is $var2"; //inaccessible
}  
f1();


//----------------------Nested function

function foo()
{
function bar()
{
echo "hi";	// doesn’t exist until foo is called.
}

}
foo();
bar();


//----------------------------- case-sensitive function name


// function be($h=30)
// {
// echo $h;
// }  

// echo "<br>";
// Be(450);
// echo "<br>";
// be(); // print default value
// echo "<br>";
// be(21);

//--------------------------- declare variable inside and outside
// use GLOBALS keyword

// echo "<br>";
// $a = "vinay";
// function hello()
// {
//     print "hello i am $GLOBALS[a]"."<br>";

//     $a = 5;
//     print "$a";
// }
//     hello();

//Modifying a variable with $GLOBALS





?>

