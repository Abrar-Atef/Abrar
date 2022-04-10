<?php
$users = [
  (object)[
    'id' => 1,
    'name' => 'ahmed',
    "gender" => (object)[
      'gender' => 'm'
    ],
    'hobbies' => [
      'football', 'swimming', 'running'
    ],
    'activities' => [
      "school" => 'drawing',
      'home' => 'painting',
    ]

  ],
  (object)[
    'id' => 2,
    'name' => 'mohamed',
    "gender" => (object)[
      'gender' => 'm'
    ],
    'hobbies' => [
      'swimming', 'running',
    ],
    'activities' => [
      "school" => 'painting',
      'home' => 'drawing'
    ]
  ],
  (object)[
    'id' => 3,
    'name' => 'menna',
    "gender" => (object)[
      'gender' => 'f'
    ],
    'hobbies' => [
      'running',
    ],
    'activities' => [
      "school" => 'painting',
      'home' => 'drawing'
    ]
  ],
];

function creatTable($users)
{
  if (!empty($users)) {
    $table =
      "  <div class='container text-center'>
          <h1 class ='my-4 text-danger'>Table of users</h1>

          <table class='table table-danger'>
          <thead class='table-dark'>
              <tr> ";
    foreach ($users[0] as $col => $value) {
      $table .=  "<th>$col</th>";
    }
    $table .= "</tr>
            </thead>

            <tbody>";

    foreach ($users as $user) {
      $table .= " <tr>";
      foreach ($user as $proparty => $value) {
        $table .= " <td>";
        if (gettype($value) == 'array' || gettype($value) == 'object') {
          foreach ($value as $valueKey => $valuesOfValue) {
            if ($valueKey == 'gender' && $proparty == 'gender') {
              if ($valuesOfValue == 'm') {
                $valuesOfValue = "male";
              } else {
                $valuesOfValue = "female";
              }
            }
            $table .= $valuesOfValue . " ";
          }
        } else {
          $table .= $value;
        }
        $table .= "</td>";
      }
      $table .= "</tr>";
    }
    $table .= "</tbody>
</table>
</div>";
    return $table;
  } else {
    return false;
  }
}

?>

<!---------------------------Html Code--------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 02</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.bundle.js"></script>
</head>

<body>
  <?= creatTable($users) ?>
</body>

</html>