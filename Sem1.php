<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
        It Sem1 Gpa
        </title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <meta charset="utf-8">
 
    </head>
    <div class="container">
  <!-- Content here -->

    <div class="mainpart">
<h1 align="center">Welcome to Gpa calculator</h1>
<h2 align="right"><a href="selvahome.php"/>HOME</a></h2>
<h3 align="center">Feed ur grades</h3>
<br>
<div class="containers">
<form method="POST" />
Choose the grade of Communicative English

        <select name="sub1" >
	<option>O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
     <br><br>
   

     Choose the grade of Mathematics I<select name="sub2">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
Choose the grade of Engineering Physics<select name="sub3">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
Choose the grade of Engineering Chemistry<select name="sub4">
    <option>O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
Choose the grade of Problem Solving Python Programming<select name="sub5">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
Choose the grade of Engineering Graphics<select name="sub6">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
Choose the grade of Problem Solving Python Laboratory<select name="lab1">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
Choose the grade of Physics Chemistry Laboratory<select name="lab2">
    <option> O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select><br><br>
<input type="submit" class ="button" name="submit" value="submit" align="center" onclick="e.preventDefault"/>
</div>   
    </div>

</body>
<div class="display">
<?php
    $i=1;
    $no=10;
    $s11=0;
    $s22=0;
    $s33=0;
    $s44=0;
    $s55=0;
    $s66=0;
    $l11=0;
    $l22=0;
    $credits1=0;
    $credits2=0;
    $credits3=0;
    $credits4=0;
    $credits5=0;
    $credits6=0;
    $credits7=0;
    $credits8=0;
    $credits9=0;
    $sumcredits=0;
    $totcredits=0;
    $divider=1;
    $sub1=4;
    $sub2=4;
    $sub3=3;
    $sub4=3;
    $sub5=3;
    $sub6=4;
    $sub7=2;
    $sub8=2;
if(isset($_POST['submit']))
{
    $s1=$_POST['sub1'];
    $s2=$_POST['sub2'];
    $s3=$_POST['sub3'];
    $s4=$_POST['sub4'];
    $s5=$_POST['sub5'];
    $s6=$_POST['sub6'];
    $l1=$_POST['lab1'];
    $l2=$_POST['lab2'];
    
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
    if($s4=='O')
{
    $s44=10;
}
    if($s5=='O')
{
    $s55=10;
}
    if($s6=='O')
{   
    $s66=10;
}
    if($l1=='O')
{
    $l11=10;
}
    if($l2=='O')
{
    $l22=10;
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
if($s4=='A+')
{
    $s44=9;
}
if($s5=='A+')
{
    $s55=9;
}
if($s6=='A+')
{
    $s66=9;
}
if($l1=='A+')
{
    $l11=9;
}
if($l2=='A+')
{
    $l22=9;
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
if($s4=='A')
{
    $s44=8;
}
if($s5=='A')
{
    $s55=8;
}
if($s6=='A')
{
    $s66=8;
}
if($l1=='A')
{
    $l11=8;
}
if($l2=='A')
{
    $l22=8;
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
if($s4=='B+')
{
    $s44=7;
}
if($s5=='B+')
{
    $s55=7;
}
if($s6=='B+')
{
    $s66=7;
}
if($l1=='B+')
{
    $l11=7;
}
if($l2=='B+')
{
    $l22=7;
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
if($s4=='B')
{
    $s44=6;
}
if($s5=='B')
{
    $s55=6;
}
if($s6=='B')
{
    $s66=6;
}
if($l1=='B')
{
    $l11=6;
}
if($l2=='B')
{
    $l22=6;
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
if($s4=='U')
{
    $s44=0;
}
if($s5=='U')
{
    $s55=0;
}
if($s6=='U')
{
    $s66=0;
}
if($l1=='U')
{
    $l11=0;
}
if($l2=='U')
{
    $l22=0;
}
//to find the total creidts
//s1
if($s11>0)
{
    $credits1=4;
}
 else 
     
{
$credits1=0;    
}
//s2
if($s22>0)
    $credits2=4;
}
else
{
    $credits2=0;
}
//s3*
if($s33>0)
{
    $credits3=3;
}
else
{
    $credits3=0;
}
//s4
if($s44>0)
{
    $credits4=3;
}
else{
    $credits4=0;
}
//s5
if($s55>0)
{
    $credits5=3;
}
else
{
    $credits5=0;
}
//s6
if($s66>0)
{
    $credits6=4;
}
else
{
    $credits6=0;
}
//l1
if($l11>0)
    
{
    $credits7=2;
}
else
{
    $credits7=0;
}
//l2
if($l22>0)
{
    $credits8=2;
}
else
{
    $credits8=0;
}

$sumcredits1=$sub1*$s11;
$sumcredits2=$sub2*$s22;
$sumcredits3=$sub3*$s33;
$sumcredits4=$sub4*$s44;
$sumcredits5=$sub5*$s55;
$sumcredits6=$sub6*$s66;
$sumcredits7=$sub7*$l11;
$sumcredits8=$sub8*$l22;
$totcredit=$sumcredits1+$sumcredits2+$sumcredits3+$sumcredits4+$sumcredits5+$sumcredits6+$sumcredits7+$sumcredits8;
$divider=$credits1+$credits2+$credits3+$credits4+$credits5+$credits6+$credits7+$credits8;
if($divider>0)
{

$gpa=$totcredit/$divider;
echo"<br>";
echo"The Gpa is $gpa";
echo"<br>";
echo "The Credits you have earned is $totcredit";
}
?>
</div>
</div>

 
</html>
