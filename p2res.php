<?php
$number1 =  $_POST["n1"];
$number2 =  $_POST["n2"];
$operation =  $_POST["operation"];
$num = 4;
$factorial = 1;
$case =  $operation;
function check_prime($num)
{
if ($num == 1)
return 0;
for ($i = 2; $i <= $num/2; $i++)
{
if ($num % $i == 0)
return 0;
}
return 1;
}
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <title>Pracical 2</title>
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
   </head>
   <body>
      <br/>
      <br/>
      <h5><u>Output from the previous Program By 185162 Siddhesh Bhupendra Kukade</u> </h5>
      
      <br/>
      <?php
      switch($case){
      case "factorial" :
      echo "<h1>Calculating Factorial of $number1 and $number2 in PHP </h1>";
echo "<br/>";

      for ($x=$number1; $x>=1; $x--)
      {
      $factorial = $factorial * $x;
      }
      echo "<h5>Factorial of $number1 is $factorial.</h5> ";
      for ($x=$number2; $x>=1; $x--)
      {
      $factorial = $factorial * $x;
      }
      echo "<h5>Factorial of $number2 is $factorial.</h5>";
      break;
      case "prime":
      echo "<h1>Checking whether $number1 and $number2 are Prime or not using  PHP </h1>";
echo "<br/>";

      $flag_val = check_prime($number1);
      if ($flag_val == 1)
      echo "<h5>$number1 is a prime number.</h5>";
      else
      echo "<h5>$number1 is a non-prime number.</h5>";
      echo "<br/>";
      $flag_val = check_prime($number2);
      if ($flag_val == 1)
      echo "<h5>$number2 is a prime number.</h5>";
      else
      echo "<h5>$number2 is a non-prime number.</h5>";
      break;
      case "oddEven":
       echo "<h1>Checking whether $number1 and $number2 are Odd or Even Numbers using  PHP </h1>";
echo "<br/>";

       if($number1 % 2 == 0 ){
         echo  "<h5> $number1 is Even Number.</h5> ";
       }else{
          echo  "<h5> $number1 is Odd Number.</h5>";
       }
     if($number2 % 2 == 0 ){
         echo  "<h5>$number2 is Even Number.</h5>";
       }else{
          echo  "<h5>$number2 is Odd Number.</h5>";
       }
      break;
      case "posNeg":
       echo "<h1>Checking whether $number1 and $number2 are Positive or Negative using  PHP </h1>";
echo "<br/>";

        if($number1 > 0 ){
         echo  "<h5>$number1 is Positive Number.</h5>";
       }else{
          echo  "<h5>$number1 is Negative Number.</h5>";
       }
     if($number2 % 2 >  0 ){
         echo  "<h5>$number2 is Positive Number.</h5>";
       }else{
          echo  "<h5>$number2 is Negative Number.</h5>";
       }
      break;
      default :
      echo "Invalid Operation";
      }
      ?>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>
