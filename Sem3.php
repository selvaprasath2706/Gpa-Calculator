<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>IT Sem 3 Gpa calculator</title>
  </head>
  <body style="background-color: #484848">

    <div class="container bg-dark mx-auto" style="width: 80%;">
      <!-- Content here -->
<h3 class="text-white bg-dark" style = "font-family:courier,arial,helvetica;text-align: center;"> Gpa calculator For IT Semester 3 </h3>
<p class="text-right">

<a class="text-light text-right" href="index.php"/>HOME</a>
</p>
<form method="POST" class="text-white pl-5 lead font-weight-normal pr-5 pt-2"  id="selva"/>

choose the grade of Discrete Mathematics (MA8351)<select name="sub1" class="form-control">
	<option>O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Digital Principles System Design (CS8351)<select name="sub2" class="form-control">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Data Strucutres (CS8391)<select name="sub3" class="form-control">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Object Oriented Programming (CS8392)<select name="sub4" class="form-control">
    <option>O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Analog and Digital Communication (EC8394)<select name="sub5"class="form-control">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Data Structures Laboratory (CS8381)<select name="sub6" class="form-control">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choosethe grade of Object Oriented Programming Laboratory (CS8383)<select name="lab1" class="form-control">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Digital Systems Laboratory (CS8382)<select name="lab2"class="form-control">
    <option> O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Interpersonal Laboratory (HS8381)<select name="lab3"class="form-control">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
<div class="text-center pt-3 pb-2">
  <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
</div>
<div class="text-justify  ">
<?php
    $i=1;
    $no=10;
    $s11=0;
    $s22=0;
    $s33=0;
    $s44=0;
    $s55=0;
    $l44=0;
    $l11=0;
    $l22=0;
    $l33=0;
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
    $sub6=2;
    $sub7=2;
    $sub8=2;
    $sub9=1;
if(isset($_POST['submit']))
{
    $s1=$_POST['sub1'];
    $s2=$_POST['sub2'];
    $s3=$_POST['sub3'];
    $s4=$_POST['sub4'];
    $s5=$_POST['sub5'];
    $l4=$_POST['sub6'];
    $l1=$_POST['lab1'];
    $l2=$_POST['lab2'];
    $l3=$_POST['lab3'];

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
    if($l4=='O')
{
    $l44=10;
}
    if($l1=='O')
{
    $l11=10;
}
    if($l2=='O')
{
    $l22=10;
}
    if($l3=='O')
{
    $l33=10;
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
if($l4=='A+')
{
    $l44=9;
}
if($l1=='A+')
{
    $l11=9;
}
if($l2=='A+')
{
    $l22=9;
}
if($l3=='A+')
{
    $l33=9;
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
if($l4=='A')
{
    $l44=8;
}
if($l1=='A')
{
    $l11=8;
}
if($l2=='A')
{
    $l22=8;
}
if($l3=='A')
{
    $l33=8;
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
if($l44=='B+')
{
    $l44=7;
}
if($l1=='B+')
{
    $l11=7;
}
if($l2=='B+')
{
    $l22=7;
}
if($l3=='B+')
{
    $l33=7;
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
if($l4=='B')
{
    $l44=6;
}
if($l1=='B')
{
    $l11=6;
}
if($l2=='B')
{
    $l22=6;
}
if($l3=='B')
{
    $l33=6;
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
if($l4=='U')
{
    $l44=0;
}
if($l1=='U')
{
    $l11=0;
}
if($l2=='U')
{
    $l22=0;
}
if($l3=='U')
{
    $l33=0;
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
//l4
if($l44>0)
{
    $credits6=1;
}
else
{
    $credits7=0;
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
//l3
if($l33>0)
{
    $credits9=2;
}
else
{
    $credits9=0;
}
$sumcredits1=$sub1*$s11;
$sumcredits2=$sub2*$s22;
$sumcredits3=$sub3*$s33;
$sumcredits4=$sub4*$s44;
$sumcredits5=$sub5*$s55;
$sumcredits6=$sub6*$l44;
$sumcredits7=$sub7*$l11;
$sumcredits8=$sub8*$l22;
$sumcredits9=$sub9*$l33;
$totcredit=$sumcredits1+$sumcredits2+$sumcredits3+$sumcredits4+$sumcredits5+$sumcredits6+$sumcredits7+$sumcredits8+$sumcredits9;
$divider=$credits1+$credits2+$credits3+$credits4+$credits5+$credits6+$credits7+$credits8+$credits9;
if($divider>0)
{

$gpa=$totcredit/$divider;
echo"<br>";
echo"The Gpa is $gpa";
echo"<br>";
echo "The Credits you have earned is $totcredit";
}
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</div>

<p class="text-right">
Selva
</p>

</div>

</body>

</html>
