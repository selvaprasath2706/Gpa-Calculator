<h1 align="center">Welcome to cgpa calculator</h1>
<h2 align="right"><a href="selvahome.php"/>HOME</a></h2>
<h3>Enter the following</h3>
<form method="POST"/>
choose the grade of Professional Elective IV<select name="sub1">
	<option>O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
choose the grade of Professional Elective V<select name="sub2">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
choose the grade of Project<select name="sub3">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
<input type="submit" name="submit" value="submit"/>
<?php
    $i=1;
    $no=10;
    $s11=0;
    $s22=0;
    $s33=0;
    $credits1=0;
    $credits2=0;
    $credits3=0;
    $sumcredits=0;
    $totcredits=0;
    $divider=1;
    $sub1=3;
    $sub2=3;
    $sub3=10;
    
if(isset($_POST['submit']))
{
    $s1=$_POST['sub1'];
    $s2=$_POST['sub2'];
    $s3=$_POST['sub3'];  
    if($s1=='O')
{
    $s11=10;
}
    if($s2=='O')
{
    $s22=10;
}
    if($s3=='O')
{
    $s33=10;
}
    
//grade 2
if($s1=='A+')
{
    $s11=9;
}
if($s2=='A+')
{
    $s22=9;
}
if($s3=='A+')
{
    $s33=9;
}
//grade 2 ends
//grade 3 starts
if($s1=='A')
{
    $s11=8;
}
if($s2=='A')
{
    $s22=8;
}
if($s3=='A')
{
    $s33=8;
}

//GRADE 3 ENDS
///GRADE 4 STARTS
if($s1=='B+')
{
    $s11=7;
}
if($s2=='B+')
{
    $s22=7;
}
if($s3=='B+')
{
    $s33=7;
}

//GRADE 4 ENDS
//GRADE 5 STARTS
if($s1=='B')
{
    $s11=6;
}
if($s2=='B')
{
    $s22=6;
}
if($s3=='B')
{
    $s33=6;
}

//GRADE 5 ENDS
//GRADE 6 STARTS
if($s1=='U')
{
    $s11=0;
    
}
if($s2=='U')
{
    $s22=0;
}
if($s3=='U')
{
    $s33=0;
}

//to find the total creidts
//s1
if($s11>0)
{
    $credits1=3;
}
 else 
     
{
$credits1=0;    
}
//s2
if($s22>0)
    $credits2=3;
}
else
{
    $credits2=0;
}
//s3*
if($s33>0)
{
    $credits3=10;
}
else
{
    $credits3=0;
}
$sumcredits1=$sub1*$s11;
$sumcredits2=$sub2*$s22;
$sumcredits3=$sub3*$s33;

$totcredit=$sumcredits1+$sumcredits2+$sumcredits3;
$divider=$credits1+$credits2+$credits3;
$gpa=$totcredit/$divider;
echo"The Gpa is $gpa";
?>
