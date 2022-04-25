<?php
include_once "header.php";
?>
<em>
  <h1 class="text-center text-primary my-5">please answer the questions</h1>
</em>
<div class="container my-5">
  <form action="result.php" method="post">
    <table class="table">
      <thead class="table-primary">
        <tr>
          <th>Questions</th>
          <th>Bad</th>
          <th>Good</th>
          <th>Very good</th>
          <th>Excellent</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Are you satisfied with the level of cleanliness?</th>
          <td>
            <input type="radio" name="clean" value="bad">
          </td>
          <td>
            <input type="radio" name="clean" value="good">
          </td>
          <td>
            <input type="radio" name="clean" value="veryGood">
          </td>
          <td>
            <input type="radio" name="clean" value="excellent">
          </td>
        </tr>
        <tr>
          <th scope="row">Are you satisfied with the service prices? </th>
          <td>
            <input type="radio" name="price" value="bad">
          </td>
          <td>
            <input type="radio" name="price" value="good">
          </td>
          <td>
            <input type="radio" name="price" value="veryGood">
          </td>
          <td>
            <input type="radio" name="price" value="excellent">
          </td>
        </tr>
        <tr>
          <th scope="row">Are you satisfied with the nursing service?</th>
          <td>
            <input type="radio" name="nursing" value="bad">
          </td>
          <td>
            <input type="radio" name="nursing" value="good">
          </td>
          <td>
            <input type="radio" name="nursing" value="veryGood">
          </td>
          <td>
            <input type="radio" name="nursing" value="excellent">
          </td>
        </tr>
        <tr>
          <th scope="row">Are you satisfied with the level of doctors?</th>
          <td>
            <input type="radio" name="doctors" value="bad">
          </td>
          <td>
            <input type="radio" name="doctors" value="good">
          </td>
          <td>
            <input type="radio" name="doctors" value="veryGood">
          </td>
          <td>
            <input type="radio" name="doctors" value="excellent">
          </td>
        </tr>
        <tr>
          <th scope="row">Are you satisfied with calmness in hospital?</th>
          <td>
            <input type="radio" name="calme" value="bad">
          </td>
          <td>
            <input type="radio" name="calme" value="good">
          </td>
          <td>
            <input type="radio" name="calme" value="veryGood">
          </td>
          <td>
            <input type="radio" name="calme" value="excellent">
          </td>
        </tr>
      </tbody>
    </table>
    <button class="btn btn-primary w-100 fs-5">result</button>
  </form>
</div>
</body>

</html>