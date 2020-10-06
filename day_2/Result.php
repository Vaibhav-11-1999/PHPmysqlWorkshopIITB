<html>
<?php
	$sn=$_POST['sn'];
	$subject1=$_POST['sub1'];
	$subject2=$_POST['sub2'];
	$subject3=$_POST['sub3'];
	$subject4=$_POST['sub4'];
	$subject5=$_POST['sub5'];
	$total=$subject1+$subject2+$subject3+$subject4+$subject5;
    $percentage = ($total / 500.0) * 100;

	$remark1=0;
	$remark2=0;
	$remark3=0;
	$remark4=0;
	$remark5=0;
	$count=0;
	$s="a";
	$min=35;
	$max=100;
	$sub1='subject1';
	$sub2='subject2';
	$sub3='subject3';
	$sub4='subject4';
	$sub5='subject5';

	
	if($subject1<35){
		$remark1="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$sub1;
	}else if($subject1>79){
		$remark1="<font color='green'>D</font>";
	}else{
		$remark1='-';
	}
	
	if($subject2<35){
		$remark2="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$sub2;
	}else if($subject2>79){
		$remark2="<font color='green'>D</font>";
	}else{
		$remark2='-';
	}

	if($subject3<35){
		$remark3="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$sub3;
	}else if($subject3>79){
		$remark3="<font color='green'>D</font>";
	}else{
		$remark3='-';
	}

	if($subject4<35){
		$remark4="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$sub4;
	}else if($subject4>79){
		$remark4="<font color='green'>D</font>";
	}else{
		$remark4='-';
	}
	
	if($subject5<35){
		$remark5="<font color='red'>*</font>";
		$count++;
		$s=$s.' and '.$sub5;
	}else if($subject5>79){
		$remark5="<font color='green'>D</font>";
	}else{
		$remark5='-';
	}

	$s=str_replace('a and', '', $s);
	if($count>2){
		$s="Fail";
	}else if($count==0){
		$s="Pass";
	}else if($count<=2){
		$s="Compartment in ".' '.$s;
	}
?>

<center>
	<table border=1>
		<tr>
		<td>
			<table  width=100%>
			<tr>
				
				<td>
					<b><font size='5'>Student Marksheet</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br><br>
					<font size='4' color='grey'><b><?php  echo "$sn"; ?></b></font>
				</td>
			</tr>
			</table>
		</td>
		</tr>
		<tr>
		
		<tr>
		<td>
			<table border=1 width=100%>
				<tr><th><i>Subject code</i></th><th><i>Subject name</i></th><th><i>Min marks</i></th><th><i>Max marks</i></th><th><i>Marks obtained</i></th><th><i>Remark</i></th></tr>
				<tr><td>101</td><td>subject1</td><td>35</td><td>100</td><td><?php echo "$subject1"; ?></td><td><?php echo "$remark1"; ?></td></tr>
				<tr><td>102</td><td>subject2</td><td>35</td><td>100</td><td><?php echo "$subject2"; ?></td><td><?php echo "$remark2"; ?></td></tr>
				<tr><td>103</td><td>subject3</td><td>35</td><td>100</td><td><?php echo "$subject3"; ?></td><td><?php echo "$remark3"; ?></td></tr>
				<tr><td>104</td><td>subject4</td><td>35</td><td>100</td><td><?php echo "$subject4"; ?></td><td><?php echo "$remark4"; ?></td></tr>
				<tr><td>105</td><td>subject5</td><td>35</td><td>100</td><td><?php echo "$subject5"; ?></td><td><?php echo "$remark5"; ?></td></tr>
				<tr><td></td><td></td><td><b>Total</b></td><td><b>400</b></td><td><b><?php echo "$total"; ?><b></td><td></td></tr>
				
			</table>
		</td>
		</tr>

		<tr>
		<td>
			<table>
				<tr><td><b><font size='4'>Result:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$s"; ?></font></b></td></tr>
				<tr><td><b><font size='4'>Percentage:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$percentage"; ?></font></b></td></tr>
			</table>
		</td>
		</tr>
	</table>
</center>

</html>