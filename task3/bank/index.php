<?php

if (!empty ($_POST)) {
    $userName = $_POST['userName'];
    $loanAmount = $_POST['loanAmount'];
    $loanYears = $_POST['loanYears'];
    $inetrestPerYear = '';
    $inetrestRate = '';
    $inetrestPerMonth = '';
    $tabel = '' ;
    if ($loanYears < 3) {
        $inetrestPerYear =  $loanAmount * 0.1;
        $inetrestRate =  $inetrestPerYear * $loanYears;
        $loanAfterInetrest = $loanAmount + $inetrestRate;
        $inetrestPerMonth = $loanAfterInetrest / ($loanYears * 12);
    } else {
        $inetrestPerYear =  $loanAmount * 0.15;
        $inetrestRate =  $inetrestPerYear * $loanYears;
        $loanAfterInetrest = $loanAmount + $inetrestRate;
        $inetrestPerMonth = $loanAfterInetrest / ($loanYears * 12);
    }
 
}

?>

<!-- ------------------------DESIGN------------------------ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK03</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="container-fluid">
        <em>
            <h1 class="text-center display-5 fw-bold">Bank</h1>
        </em>
        <section class="bank ">
            <div class="over-layer">
                <div class=" row ">
                    <div class="col-6 mx-auto">
                        <form method="post" class="w-75">
                            <div class="form-group">
                                <label class="fs-4 m-2" for="user-name">User Name</label>
                                <input class="form-control" type="text" name="userName" id="user-name">
                            </div>
                            <div class="form-group">
                                <label class="fs-4 mb-2" for="loan-amount">Loan amount</label>
                                <input class="form-control" type="number" name="loanAmount" id="loanAmount">
                            </div>
                            <div class="form-group">
                                <label class="fs-4 mb-2" for="loan-years">Loan years</label>
                                <input class="form-control" type="number" name="loanYears" id="loan-years">
                            </div>
                            <button class="btn btn-outline my-3 fs-5">calculate</button>
                        </form>
                    <?php
              if (!empty ($_POST)){
                $tabel = "<table class='table my-3'>
                <thead class='text-light'>
                    <tr>
                        <th>user name</th>
                        <th>inetrest rate</th>
                        <th>loan after inetrest </th>
                        <th> Monthly</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>";
                    $tabel .= " <td>$userName</td>";
                    $tabel .= "<td>$inetrestRate</td>";
                    $tabel .= "<td>$loanAfterInetrest</td>";
                    $tabel .=" <td>$inetrestPerMonth</td>";
                    $tabel .= "</tr> 

                </tbody>
            </table>
            </table>";
              }
                if (!empty ($tabel) && !empty ($_POST)){
                    echo $tabel;
                }  ?>
                    </div>
                    
                </div>

            </div>
        </section>
    </div>
</body>
</html>