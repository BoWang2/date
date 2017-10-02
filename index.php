<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

echo "3.";
if($date > $tar){
	echo "the future</br>";
}else if($date < $tar){
	echo"the past</br>";
}
else{ 
echo"Oops</br>";
}

//2
echo"2.";
 $date =  date('Y-m-d', time());
echo str_replace("-","-",$date);
echo "</br>";


//3
echo"4.";
echo "The positions are:";
for($i = 0;$i<strlen($date);$i++)
{
	if($date[$i] == "-")
	{
		echo $i ;		
		echo " ";	
	}
}
echo"</br>";
echo str_replace("-"," ",$date);

echo "</br>";





//5
echo"5.";
echo str_word_count($date);
echo"</br>";


//6
echo"6.";
echo strlen($date);
echo "</br>";



//7
echo"7.";
echo ord($date);
echo "</br>";


//8
echo"8.";
$x = strlen($date)-2;
echo substr($date,$x,2);
echo "</br>";


//9
echo"9.";
print_r (explode("/",$date));
echo"</br>";





$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "</br>";

echo"<h1>this is the first one</h1>";
foreach($year as $y)
{
	if($y % 400 != 0)
	{
		if($y % 100 == 0)
		{
			echo "$y is not leap year</br>";
		}else{
			if($y % 4 == 0)
			{	
			echo "$y is leap year</br>";
			}else
			{
			echo "$y is not leap year";
			}
		}
	}else{
	echo "$y is leap year</br>";
	}

}

echo "<h1>this is the second one</h1>";

foreach($year as $x)
{
leap($x);
}



function leap($x)
{
	switch($x % 4 == 0 and $x % 100 != 0 or $x % 400 == 0)
{	case 1:
	{
	echo "$x is leap year</br>";
	break;
	}

	case 0:
	{
	echo "$x is not leap year</br>";
	break;
	}
}



}







echo "<h1>this is the third one</h1>";


for($k = 0;$k < 6;$k++)
{
leap($year[$k]);
}




?>
