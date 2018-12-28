<?php
//1月份：(30000–5000-4500-2000）×3% = 555元；
//2月份：(30000×2-5000×2-4500×2-2000×2）×10% -2520 -555 =625元；
//3月份：(30000×3-5000×3-4500×3-2000×3）×10% -2520 -555-625 =1850元；)))

function cal($month, $percent, $minus) {
	$part1 = 30000*$month-5000*$month-4500*$month-2000*$month;
	$part2 = $part1*$percent;
	return $part2-$minus;
}

function get_minus($in){
	static $accunulate=0;
	$accunulate += $in;
	return (2520+$accunulate);
}

echo "January:";
echo $re = cal(1,0.03,0);echo PHP_EOL;

echo "Feberay:";
$minus = get_minus($re);
echo $re = cal(2,0.1,$minus);echo PHP_EOL;

echo "March:";
$minus = get_minus($re);
echo $re = cal(3,0.1,$minus);echo PHP_EOL;

echo "April:";
$minus = get_minus($re);
echo $re = cal(4,0.1,$minus);echo PHP_EOL;

echo "May:";
$minus = get_minus($re);
echo $re = cal(5,0.1,$minus);echo PHP_EOL;

echo "June:";
$minus = get_minus($re);
echo $re = cal(6,0.1,$minus);echo PHP_EOL;

echo "July:";
$minus = get_minus($re);
echo $re = cal(7,0.1,$minus);echo PHP_EOL;

echo "August:";
$minus = get_minus($re);
echo $re = cal(8,0.1,$minus);echo PHP_EOL;

echo "September:";
$minus = get_minus($re);
echo $re = cal(9,0.1,$minus);echo PHP_EOL;

echo "October:";
$minus = get_minus($re);
echo $re = cal(10,0.1,$minus);echo PHP_EOL;

echo "Noveber:";
$minus = get_minus($re);
echo $re = cal(11,0.1,$minus);echo PHP_EOL;

echo "December:";
$minus = get_minus($re);
echo $re = cal(12,0.1,$minus);echo PHP_EOL;
