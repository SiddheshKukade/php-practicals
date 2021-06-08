<!-- Aim : Write a program using switch case for following cases.
- Factorial, Prime no, Even ODD, Positive/ Negative
-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Practical 1</title>
  </head>
  <style type="text/css">
  body{
  max-width: 80%;
  margin-left: auto;
  margin-right: auto;
  }
  
  /*   h1,h2{
  margin-left: 2rem;
  }*/
  h5{
  margin-left : 2rem;
  margin-bottom: 1rem;
  }
  select {
  width : 60rem;
  height : 3rem;
  }
  </style>
</head>
<body>
  <br/>
  <h1>Aim of the Practical : </h1>
  <meta charset="utf-8">
  <h2> Write a program using switch case for following cases.
  - Factorial, Prime no, Even ODD, Positive/ Negative</h2>
  <form  method="POST" action="p2res.php">
    <div class="form-group">
      <label for="exampleInputEmail1">First Number here</label>
      <input type="number" name="n1"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex. 1">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Second Number here</label>
      <input type="number"  name="n2" class="form-control" id="exampleInputPassword1" placeholder="Ex. 2">
    </div>
    
    <label for="operation">  Select which Operation you want to perform on these numbers.</label>
    <br/>
    <select name="operation" id="operation">
      <option value="factorial">Calculate Factorial</option>
      <option value="prime">Calculate Prime Number</option>
      <option value="oddEven">Check whether the Numbers are EVEN or ODD</option>
      <option value="posNeg">Check whether the Numbers are POSITIVE or NEGATIVE</option>
    </select>
    <br><br>
    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>