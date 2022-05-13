<?php

// $num_one="10";
// $num_two=45;
// $res=$num_one+$num_two;
// echo $res."<br>";
//echo print printf sprintf

//echo "Hello world"."$res"//We can pass multiple argument
//single quets cannot disp varible val
//echo does not ret any value
//print func return 1 
//  echo (print(printf("Yashu singh")));
// echo(sprintf(print("sameer")))."<br>";
// $str = addcslashes("Hello World!","Wo"); //add \ before the letter W
// echo($str);
// $str1="Hello my name is shivam"."<br>";

// echo $str1."<br>";
// echo (addcslashes($str,'m')."<br>");

// $str = addslashes('What "does "" mean?');

// echo($str)."<br>";
// echo (bin2hex(10101));

// echo(chop(" shivam verma ","r"));

$str = "Hello World!";
// echo $str . "<br>";
// echo chop($str,"rld!")."<br>";
// echo chr(98)."<br>";
// echo chunk_split("hello",2,"{")."<br>";
// echo crc32("AB")."<br>";

// $str = "Hello world!";
// echo convert_uuencode($str)."<br>";
// echo convert_uudecode(",2&5L;&\@=V]R;&0A `")."<br>";

// echo crypt(">",1000);

//Arrays
$stu_rec=array(1,2,3,7.4);
$stu=array("8"=>1,"5"=>2,"6"=>4,7);
// var_dump($stu_rec+$stu);
// var_dump($stu_rec==$stu);
// print_r($stu_rec)."<br>";
// for($i=0;$i<3;$i++){
//     echo($stu_rec[$i]);
// }
// $stu_class=["manu"=>10,"raj"=>20,"vinay"=>30];
// $one=[10,20,30];
// $two=[10,20,30];
// var_dump($stu===$stu_rec);
// var_dump($one==$two);
// $res= 5>9? 2: 9;
// echo $res;
// $res=15>9? print("5") : 9;
// echo $res;

//Multidimensinal array

$arr_mult=["school friends"=> ['ab','abhi',"avi"],"college friend"=>["A","B","C"] ];
$arr_tw0=[array(100,200,300),array(400,500,600)];

$a1=["A","B","E","C","C","D"];
$a2=["67","35","37","43","A"];

// print_r(array_chunk($a1,2))."<br>";

// $c = array_combine($a1, $a2);

// print_r(array_diff($a1,$a2));
// echo "<br>";
// print_r($c);

// print_r(array_diff_assoc($a1,$a2));
// echo "<br>";

// print_r(array_count_values($a1));// used to count no of occur of each element
// echo "<br>";
// array_push($a1,10);
// print_r($a1);
// echo "<br>";

// print_r(array_intersect($a1,$a2));
// echo "<br>";
// print_r(array_merge($a1,$a2));
// echo "<br>";
print_r(array_pop($a1));
echo "<br>";
sort($a1);
print_r($a1);
echo "<br>";
print_r(rsort($a1));


?>