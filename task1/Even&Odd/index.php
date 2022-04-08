<?php
if ($_POST) {
  if($_POST['Enter_Num']%2==0) {
      $message =
        "<div class='alert alert-success'> 
         Even Number : $_POST[Enter_Num]
      </div>";
  } else{
    $message =
      "<div class='alert alert-success'> 
        Odd Number : $_POST[Enter_Num]
    </div>";
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
  <title>Even&Odd</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-5">
        <h4 class="fs-2 text-primary">Even & Odd Number</h4>
      </div>
      <div class="col-4 offset-4">
        <form method="post">
          <div class="mb-3">
            <input type="number" class="form-control" id="Num" name="Enter_Num" placeholder=" Enter Number">
          </div>
          <button class="btn btn-primary">Calc</button>
        </form>
        <?php 
        if (isset($message)) {
          echo $message ;
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>