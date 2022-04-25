<?php
$result = '';
if ($_POST) {
  $firstNum = $_POST['Num1'];
  $secondNum = $_POST['Num2'];
  $opreaton = $_POST['op'];
  switch ($_POST['op']) {
    case 'add':
      $result =
        "<div class='alert alert-success mt-2'> result = ";
      $result .= $firstNum + $secondNum;
      "</div>";
      break;
    case 'sub':
      $result =
        "<div class='alert alert-success mt-2'> result = ";
      $result .= $firstNum - $secondNum;
      "</div>";
      break;
    case 'mult':
      $result =
        "<div class='alert alert-success mt-2'> result = ";
      $result .= $firstNum * $secondNum;
      "</div>";
      break;
    case 'div':
      $result =
        "<div class='alert alert-success mt-2'> result = ";
      $result .= $firstNum / $secondNum;
      "</div>";
      break;
    case 'mud':
      $result =
        "<div class='alert alert-success mt-2'> result = ";
      $result .= $firstNum % $secondNum;
      "</div>";
      break;
  }
}

?>

<!---------------------------Design--------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 01</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-5">
        <h4 class="fs-2 text-primary">calculator</h4>
      </div>
      <div class="col-4 offset-4">
        <form method="post">
          <div class="mb-3">
            <input type="number" class="form-control" name="Num1" placeholder=" Enter Number">
          </div>
          <div class="form-group mb-3">
            <label for="op" class="form-group fs-5 ">opreations</label>
            <select name="op" id="op" class="form-control">
              <option value="add">+</option>
              <option value="sub">-</option>
              <option value="mult">*</option>
              <option value="div">/</option>
              <option value="mud">%</option>
            </select>
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" name="Num2" placeholder=" Enter Number">
          </div>
          <button class="btn btn-primary">Calc</button>
        </form>
        <?= $result ?>
      </div>
    </div>
  </div>
</body>

</html>