<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0" name="viewport">
  <title>Document</title>
  <link rel="stylesheet" href="item.css" type="text/css">

  <script>
    function displayTooltip(tooltip) {
      tooltip.style.visibility = 'visible';
    }

    function hideTooltip(tooltip) {
      tooltip.style.visibility = 'hidden'
    }
  </script>
</head>

<body>
  <?php
  include("confs/config.php");
  $all_items = mysqli_query($miye, "SELECT * FROM item");

  ?>

  <div class="item">
    <?php
    while ($row = mysqli_fetch_assoc($all_items)) { ?>
      <div class="menu_item">

        <div class="image">
          <?php echo '<img src="./' . $row['pic_location'] . '" alt="./' . $row['name'] . '"."png" />'; ?>
        </div>

        <div class="caption<?php echo $row['id'] ?>" id="caption" onmouseover="displayTooltip(tooltip<?php echo $row['id'] ?> )" onmouseout="hideTooltip(tooltip<?php echo $row['id'] ?>)">
          <div id="text1"><?php echo $row['name']; ?></div>
          <div id="tooltip<?php echo $row['id']; ?>" class="tooltip">$<?php echo $row['price']; ?></div>
        </div>
      </div>
      <?php
      $i = $row['id'];
      if ($i == 3) {
        
      }
      $i++;
      ?>
    <?php } ?>
  </div>
</body>

</html>