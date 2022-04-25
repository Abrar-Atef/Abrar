<?php
include_once "header.php";
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    echo "<h1 class = 'text-danger text-center my-5'>Error 405 Method Not Allowed</h1>";
    http_response_code(405);
    die;
}
$result = "";
if (!empty($_POST)) {
    $clean = $_POST['clean'];
    $price = $_POST['price'];
    $nursing = $_POST['nursing'];
    $doctors = $_POST['doctors'];
    $calmness = $_POST['calme'];
    if ($clean == 'bad') {
        $result = 0;
    } elseif ($clean == 'good') {
        $result = 3;
    } elseif ($clean == 'veryGood') {
        $result = 5;
    } elseif ($clean == 'excellent') {
        $result = 10;
    }
    if ($price == 'bad') {
        $result += 0;
    } elseif ($price == 'good') {
        $result .= 3;
    } elseif ($price == 'veryGood') {
        $result += 5;
    } elseif ($price == 'excellent') {
        $result += 10;
    }
    if ($nursing == 'bad') {
        $result += 0;
    } elseif ($nursing == 'good') {
        $result += 3;
    } elseif ($nursing == 'veryGood') {
        $result += 5;
    } elseif ($nursing == 'excellent') {
        $result += 10;
    }
    if ($doctors == 'bad') {
        $result += 0;
    } elseif ($doctors == 'good') {
        $result += 3;
    } elseif ($doctors == 'veryGood') {
        $result += 5;
        $answer = 'very good';
    } elseif ($doctors == 'excellent') {
        $result += 10;
    }
    if ($calmness == 'bad') {
        $result += 0;
    } elseif ($calmness == 'good') {
        $result += 3;
    } elseif ($calmness == 'veryGood') {
        $result += 5;
    } elseif ($calmness == 'excellent') {
        $result += 10;
    }
}
?>

<!-- -------------------DESIGNE------------------------------- -->

<div class="container-fluid">
    <em>
        <h1 class="text-center display-5 fw-bold text-primary my-4">Result</h1>
    </em>
    <div class="container my-5">
        <table class="table">
            <thead>
                <tr class="table-primary fs-4">
                    <th scope="col"> Questions</th>
                    <th scope="col">Answers</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Are you satisfied with the level of cleanliness?</th>
                    <td><?= $clean ?></td>

                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the service prices? </th>
                    <td><?= $price ?></td>

                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the nursing service?</th>
                    <td><?= $nursing ?></td>

                </tr>
                <tr>
                    <th scope="row">Are you satisfied with the level of doctors?</th>
                    <td><?= $doctors ?></td>

                </tr>
                <tr>
                    <th scope="row">Are you satisfied with calmness in hospital</th>
                    <td><?= $calmness ?></td>

                </tr>
                <tr class="table-primary fs-5">
                    <td>Total review</td>
                    <td>
                        <?php
                        if ($result <= 25) {
                            echo "bad";
                        } else {
                            echo "good";
                        }
                        ?>
                    </td>
                </tr>
                <tr class=" text-center">
                    <td>
                        <?php
                        if ($result <= 25) {
                            echo "<div class='text-danger fw-bold'>please contact with patient to know the probelm</div>";
                        } else {
                            echo "<div class='text-primary fw-bold fs-2'>Thank you</div> ";
                        }
                        ?>
                    </td>
                </tr>

            </tbody>

        </table>
    </div>
    </body>

    </html>