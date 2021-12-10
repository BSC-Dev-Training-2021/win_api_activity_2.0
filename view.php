<?php
include("view-controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Place</th>
        <th scope="col">Magnitude</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (isset($_GET['start']) && isset($_GET['end'])) {
        foreach ($display->features as $value) {
          if (strpos($value->properties->place, "Philippines") !== false) {
            $timestamp = $value->properties->time;
      ?>

            <tr>
              <th scope="row"><?php echo $value->properties->place; ?></th>
              <td><?php echo $value->properties->mag; ?></td>
              <td><?php echo date("Y-m-d", $timestamp/1000); ?></td>
              <td><?php echo date('H:i s', $timestamp/1000); ?></td>

            </tr>
      <?php }
        }
      } ?>
  </table>
</body>

</html>