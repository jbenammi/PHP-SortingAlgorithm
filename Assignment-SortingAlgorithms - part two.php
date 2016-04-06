<?php 
$time_start = microtime(true);

function order_array($arr){
	$firstArray = $arr;
	$minPos = 0;
	$minNum = 0;
	$maxPos = 0;
	$temp = 0;
	for ($i = 0; $i < count($arr); $i++){
		for ($j = $i; $j < count($arr); $j++){	
			if ($arr[$j] < $arr[$minPos]){
				$minPos = $j;
			}
			if ($arr[$j] > $arr[$minPos]){ 
				$maxPos = $j;
			}
		}
			$temp = $arr[$minPos];
			$arr[$minPos] = $arr[$i];
			$arr[$i] = $temp;
			$minPos = $i+1;			
	}
?>	
	<p>The minimum number in this array is <?= $arr[0]; ?> and the maximum number in the array is <?= $arr[$maxPos]; ?>.</p>
	<p> The sorted array of <br> <?= implode(", ", $firstArray); ?> <br> is <br> <?= implode(", ", $arr); ?></p>

<?php } 

function getArray(){
	for($x = 0; $x < 10000; $x++){
		$num = rand(0,10000);
		$newArray[] = $num;
	}
	return $newArray;	
}

$origonalArray = array(8,3,20,5,-6);
$randomArray = getArray();
order_array($randomArray);

$time_end = microtime(true);
$time = $time_end - $time_start;
echo "ran the functions in ".$time." seconds";

 ?>
