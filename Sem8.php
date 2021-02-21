<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>IT Sem 8 Gpa calculator</title>
  </head>
  <body style="background-color: #484848">

    <div class="container bg-dark mx-auto" style="width: 80%;">
      <!-- Content here -->
<h3 class="text-white bg-dark" style = "font-family:courier,arial,helvetica;text-align: center;"> Gpa calculator For IT Semester 8 </h3>
<p class="text-right">

<a class="text-light text-right" href="index.php"/>HOME</a>
</p>
<form method="POST" class="text-white pl-5 lead font-weight-normal pr-5 pt-2"  id="selva"/>

choose the grade of Professional Elective IV<select name="sub1" class="form-control">
	<option>O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Professional Elective V<select name="sub2" class="form-control">
    <option >O</option>
	<option>A+</option>
        <option>A</option>
        <option>B+</option>
        <option>B</option>
        <option>U</option>
</select>
choose the grade of Project<select name="sub3" class="form-control">
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
