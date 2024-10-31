<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>月送りカレンダー</title>							
</head>

<body>
  <div class="container"> 
    <h2>
      <a href="?ym=<?php echo $prev; ?>">&lt;</a> 
      <?php echo $calendar; ?>
      <a href="?ym=<?php echo $next; ?>">&gt;</a> 
    </h2>
    <table class="calendar-table">
      <tr>
        <?php 
          $days = ["日", "月", "火", "水", "木", "金", "土"];
          foreach ($days as $day) {
            echo "<th>$day</th>";
          }
        ?>
      </tr>
      <?php
        for ($week = 0; $week < 5; $week++) {
          echo "<tr>";
          for ($day = 1; $day <= 7; $day++) {
            $calendar = $week * 7 + $day;
            if ($calendar <= 31) {
              echo "<td>{$calendar}</td>";
            } else {
              echo "<td></td>";
            }
          }
          echo "</tr>";
        }
      ?>
    </table>
  </div>
</body>
</html>
