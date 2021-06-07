<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Practical 1</title>
  </head>
  <style type="text/css">
     body{
        max-width: 80%;
        margin-left: auto;
        margin-right: auto;
      }
     
    h1{
      margin-left: 2rem;
    }
    h5{
      margin-left : 2rem;
      margin-bottom: 1rem;

    }
  </style>
  <body>
<br/>
<br/>

    <h5><u>Output from the previous Program By 185162 Siddhesh Bhupendra Kukade</u> </h5>
    <h1>Arithmetic Operators in PHP </h1>
<br/>

    <?php
    $number1 =  $_POST["n1"];
    $number2 =  $_POST["n2"];
    $addition =  $number1 + $number2;
    $subtraction = $number1 - $number2;
    $Multiplication =  $number1 * $number2;
    $Division =  $number1 / $number2;
    $Modulus =  $number1 % $number2;
    $Exponentiation =  $number1 ** $number2;
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Operator</th>
          <th scope="col">Name</th>
          <th scope="col">Example</th>
          <th scope="col">Result</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>+</td>
          <td>Addtion</td>
          <td><?=$number1?> + <?=$number2?> </td>
          <td><?=$addition ?> </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>-</td>
          <td>Subtraction</td>
          <td><?=$number1?> - <?=$number2?> </td>
          <td><?=$subtraction ?> </td>
        </tr>   <tr>
        <th scope="row">3</th>
        <td>*</td>
        <td>Multiplication</td>
        <td><?=$number1?> * <?=$number2?> </td>
        <td><?=$Multiplication?> </td>
      </tr>   <tr>
      <th scope="row">4</th>
      <td>/</td>
      <td>Division</td>
      <td><?=$number1?> / <?=$number2?> </td>
      <td><?=$Division ?> </td>
    </tr>   <tr>
    <th scope="row">5</th>
    <td>%</td>
    <td>Modulus</td>
    <td><?=$number1?> % <?=$number2?> </td>
    <td><?=$Modulus ?> </td>
  </tr>
  <tr>
    <th scope="row">6</th>
    <td>**</td>
    <td>Exponentiation</td>
    <td><?=$number1?> ** <?=$number2?> </td>
    <td><?=$Exponentiation ?> </td>
  </tr>
</tbody>
</table>
<br/>
<br/>
<h1> Assignment Operators in PHP</h1>
<br/>

<?php
$number1 =  $_POST["n1"];
$number2 =  $_POST["n2"];
$x1= $_POST["n1"];
$y1 = $_POST["n2"];
$x2= $_POST["n1"];
$y2 = $_POST["n2"];
$x3= $_POST["n1"];
$y3 = $_POST["n2"];
$x4= $_POST["n1"];
$y4 = $_POST["n2"];
$x5= $_POST["n1"];
$y5 = $_POST["n2"];
$x6= $_POST["n1"];
$y6 = $_POST["n2"];
?>
<table class="table table-striped">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Operator</th>
    <th scope="col">Name</th>
    <th scope="col">Example</th>
    <th scope="col">Result</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>=</td>
    <td>Assignment</td>
    <td><?=$number1?> = <?=$number2?> </td>
    <td><?php echo $x1=$y1 ?> </td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>+=</td>
    <td>Addition Assignment</td>
    <td><?=$number1?> += <?=$number2?> </td>
    <td><?=$x2+=$y2 ?>  </td>
  </tr>   <tr>
  <th scope="row">3</th>
  <td>-=</td>
  <td>Subtraction Assignment</td>
  <td><?=$number1?> -= <?=$number2?> </td>
  <td><?=$x3-=$y3 ?>  </td>
</tr>   <tr>
<th scope="row">4</th>
<td>*=</td>
<td>Multiplication Assignment</td>
<td><?=$number1?> *= <?=$number2?> </td>
<td><?=$x4 *= $y4 ?> </td>
</tr>
<tr>
<th scope="row">5</th>
<td>/=</td>
<td>Division Assignment</td>
<td><?=$number1?> /= <?=$number2?> </td>
<td><?=$x5/=$y5?> </td>
</tr>
<tr>
<th scope="row">6</th>
<td>%=</td>
<td>Modulus Assignment</td>
<td><?=$number1?> %= <?=$number2?> </td>
<td><?php echo $x6 %= $y6?> </td>
</tr>
</tbody>
</table>
<br/>
<br/>

<h1> Comparison/Relational Operators in PHP</h1>
<br/>

<?php
$number1 =  $_POST["n1"];
$number2 =  $_POST["n2"];
?>
<table class="table table-striped">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Operator</th>
<th scope="col">Name</th>
<th scope="col">Example</th>
<th scope="col">Result</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>==</td>
<td>Equal</td>
<td><?=$number1?> = <?=$number2?> </td>
<td><?php if($number1 == $number2){
  echo  "true";
  }else{
  echo "false";
}; ?> </td>
</tr>
<tr>
<th scope="row">2</th>
<td>===</td>
<td>Identical</td>
<td><?=$number1?> += <?=$number2?> </td>
<td><?php if($number1 === $number2){
  echo  "true";
  }else{
  echo "false";
}; ?>  </td>
</tr>
<tr>
<th scope="row">3</th>
<td>!=</td>
<td>Not Equal</td>
<td><?=$number1?> != <?=$number2?> </td>
<td><?php if($number1 != $number2){
  echo  "true";
  }else{
  echo "false";
}; ?>  </td>
</tr>
<tr>
<th scope="row">4</th>
<td><></td>
<td>Not equal</td>
<td><?=$number1?> <> <?=$number2?> </td>
<td><?php if($number1 <> $number2){
  echo  "true";
  }else{
  echo "false";
}; ?>  </td>
</tr>
<tr>
<th scope="row">5</th>
<td>></td>
<td>Greater than</td>
<td><?=$number1?> > <?=$number2?> </td>
<td><?php if($number1 > $number2){
  echo  "true";
  }else{
  echo "false";
}; ?>  </td>
</tr>
<tr>
<th scope="row">6</th>
<td>%=</td>
<td>Less than</td>
<td><?=$number1?> < <?=$number2?> </td>
<td><?php if($number1 < $number2){
  echo  "true";
  }else{
  echo "false";
}; ?>  </td>
</tr>
<tr>
<th scope="row">7</th>
<td>%=</td>
<td>Less than</td>
<td><?=$number1?> < <?=$number2?> </td>
<td><?php if($number1 < $number2){
  echo  "true";
  }else{
  echo "false";
}; ?>  </td>
</tr>
<tr>
<th scope="row">8</th>
<td>>=</td>
<td>Greater than or equal to</td>
<td><?=$number1?> >= <?=$number2?> </td>
<td><?php if($number1 >= $number2){
  echo  "true";
  }else{
  echo "false";
}; ?>  </td>
</tr>
<tr>
<th scope="row">9</th>
<td><=</td>
<td>  Less than or equal to</td>
<td><?=$number1?> <= <?=$number2?> </td>
<td><?php if($number1 <= $number2){
  echo  "true";
  }else{
  echo "false";
}; ?>  </td>
</tr>
</tbody>
</table>
<br/>
<br/>

<h1>Increment / Decrement Operators in PHP</h1>
<br/>

<?php
$number1 =  $_POST["n1"];
$number2 =  $_POST["n2"];
?>
<table class="table table-striped">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Operator</th>
<th scope="col">Name</th>
<th scope="col">Example</th>
<th scope="col">Result</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>++$x</td>
<td>Pre-increment</td>
<td>++<?=$number1?>  </td>
<td><?=$number1++ ?> </td>
</tr>
<tr>
<th scope="row">2</th>
<td>$x++</td>
<td>Post Increment</td>
<td><?=$number1?>++ </td>
<td><?=++$number1?>  </td>
</tr>
<tr>
<th scope="row">1</th>
<td>--$x</td>
<td>Pre-decrement</td>
<td>--<?=$number1?>  </td>
<td><?=--$number1 ?> </td>
</tr>    <tr>
<th scope="row">1</th>
<td>$x--</td>
<td>Post decrement</td>
<td>--<?=$number1?>  </td>
<td><?=$number1-- ?> </td>
</tr>
</tbody>
</table>
<br/>
<br/>

<h1>Logical Operators in PHP</h1>
<br/>

<?php
$number1 =  $_POST["n1"];
$number2 =  $_POST["n2"];
?>
<table class="table table-striped">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Operator</th>
<th scope="col">Name</th>
<th scope="col">Example</th>
<th scope="col">Result</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>and</td>
<td>And</td>
<td><?=$number1?> and <?=$number2?>  </td>
<td><?php if($number1 and $number2){echo  "true";
}else{
echo "false";
};   ?> </td>
</tr>
<tr>
<th scope="row">1</th>
<td>or</td>
<td>Or</td>
<td><?=$number1?> or <?=$number2?>  </td>
<td><?php if($number1 or $number2){echo  "true";
}else{
echo "false";
};   ?> </td>
</tr> <tr>
<th scope="row">1</th>
<td>xor</td>
<td>xor</td>
<td><?=$number1?> xor <?=$number2?>  </td>
<td><?php if($number1 xor $number2){echo  "true";
}else{
echo "false";
};   ?> </td>
</tr> <tr>
<th scope="row">1</th>
<td>&&</td>
<td>And</td>
<td><?=$number1?> && <?=$number2?>  </td>
<td><?php if($number1 && $number2){echo  "true";
}else{
echo "false";
};   ?> </td>
</tr> <tr>
<th scope="row">1</th>
<td>||</td>
<td>Or</td>
<td><?=$number1?> || <?=$number2?>  </td>
<td><?php if($number1 || $number2){echo  "true";
}else{
echo "false";
};   ?> </td>
</tr> <tr>
<th scope="row">1</th>
<td>!</td>
<td>Not</td>
<td>! <?=$number1 ?>  </td>
<td><?php if(! $number1){ echo  "true";
}else{
echo "false";
};   ?> </td>
</tr>
</tbody>
</table>
    <br/>
    <br/>
    <br/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>