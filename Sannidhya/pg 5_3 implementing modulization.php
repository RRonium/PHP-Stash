<?php
$date=time();
echo $date."<BR>";;
$day=date('d', $date);
$month=date('m', $date);
$year=date('y', $date);
echo $day.' '.$month.' '.$year."<BR>";
/*$day=6;
$month=4;
$year=2013;*/
$first_day_of_month=mktime(0,0,0,$month,1,$year);
echo $first_day_of_month."<BR>";
$title=date('F',$first_day_of_month);
$day_of_week=date('D',$first_day_of_month);
echo $day_of_week."<BR>";
switch($day_of_week)
{
	case "Sun":
		$blankDays = 0;break;
	case "Mon":
		$blankDays = 1;break;
	case "Tue":
		$blankDays = 2;break;
	case "Wed":
		$blankDays = 3;break;
	case "Thu":
		$blankDays = 4;break;
	case "Fri":
		$blankDays = 5;break;
	case "Sat":
		$blankDays = 6;break;
}
$days_in_cur_month=cal_days_in_month(0,$month,$year);
echo "<table border=1 width=294>";
echo "<tr><th colspan=7> $title $year</th></tr>";
echo "<tr><td width=42>S</td><td width=42>M</td><td width=42>T</td>
<td width=42>W</td><td width=42>T</td><td width=42>F</td><td width=42>S</td></tr>";
$day_count=1;
echo"<tr>";
while($blankDays > 0)
{
	echo"<td></td>";
	$blankDays=$blankDays - 1;
	$day_count++;
}
$day_num=1;
while($day_num<=$days_in_cur_month)
{
	echo"<td> $day_num</td>";
	$day_num++;
	$day_count++;
	if($day_count>7)
	{
		echo"</tr><tr>";
		$day_count=1;
	}
}
while($day_count>1&&$day_count<=7)
{
	echo"<td</td>";
	$day_count++;
}
echo"</tr></table>";
?>	