<?php 


function order_array($arr){
	$minPos = 0;
	$temp = 0;
	for ($i = 0; $i < count($arr); $i++){
		for ($j = $i; $j < count($arr); $j++){	
			if ($arr[$j] < $arr[$minPos]){
				$minPos = $j;
			}
		}
			$temp = $arr[$minPos];
			$arr[$minPos] = $arr[$i];
			$arr[$i] = $temp;
			$minPos = $i+1;			
	}
?>
<p> The sorted randomly generated array of 100 integers from left to right is: <br> <?= implode(", ", $arr); ?>.</p>
<?php
}

function getArray(){
	for($x = 0; $x < 100; $x++){
		$num = rand(0,10000);
		$newArray[] = $num;
	}
	return $newArray;	
}

$origonalArray = array(8,3,20,5,-6);
$randomArray = getArray();
order_array($randomArray);

 ?>

 
