<?php
if ($_POST) {
  if ($_POST['First_Num'] > $_POST['Second_Num'] &&  $_POST['Second_Num'] > $_POST['Third_Num']) {
    $message =
      "<div class='alert alert-success'> 
         Max Number is first Number : $_POST[First_Num]
         <br>
         Min Number is Third Number : $_POST[Third_Num] 
      </div>";
  } elseif ($_POST['First_Num'] > $_POST['Third_Num'] &&  $_POST['Third_Num'] > $_POST['Second_Num']) {
    $message =
      "<div class='alert alert-success'> 
       Max Number is first Number : $_POST[First_Num]
       <br>
       Min Number is Second Number : $_POST[Second_Num]
    </div>";
  } elseif ($_POST['Second_Num'] > $_POST['First_Num'] &&  $_POST['First_Num'] > $_POST['Third_Num']) {
    $message =
      "<div class='alert alert-success'> 
     Max Number is Second Number : $_POST[Second_Num]
     <br>
     Min Number is Third Number : $_POST[Third_Num] 
  </div>";
  } elseif ($_POST['Second_Num'] > $_POST['Third_Num'] &&  $_POST['Third_Num'] > $_POST['First_Num']) {
    $message =
      "<div class='alert alert-success'> 
     Max Number is Second Number : $_POST[Second_Num]
     <br>
     Min Number is First Number : $_POST[First_Num]
  </div>";
  } elseif ($_POST['Third_Num'] > $_POST['First_Num'] &&  $_POST['First_Num'] > $_POST['Second_Num']) {
    $message =
      "<div class='alert alert-success'> 
     Max Number is Third Number : $_POST[Third_Num] 
     <br>
     Min Number is Second Number : $_POST[Second_Num]
  </div>";
  } elseif ($_POST['Third_Num'] > $_POST['Second_Num'] &&  $_POST['Second_Num'] > $_POST['First_Num']) {
    $message =
      "<div class='alert alert-success'> 
     Max Number is Third Number : $_POST[Third_Num] 
     <br>
     Min Number is First Number : $_POST[First_Num]
  </div>";
  } else {
    $message =
      "<div class='alert alert-danger'> 
     Can't select just one value  
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
  <title>Task 01</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-5">
        <h4 class="fs-2 text-primary">Max & Min Number</h4>
      </div>
      <div class="col-4 offset-4">
        <form method="post">
          <div class="mb-3">
            <input type="number" class="form-control" name="First_Num" placeholder=" Enter First Number">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" name="Second_Num" placeholder=" Enter Second Number">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" name="Third_Num" placeholder=" Enter Third Number">
          </div>
          <button class="btn btn-primary">Calc</button>
        </form>
        <?php
        if (isset($message)) {
          echo $message;
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>