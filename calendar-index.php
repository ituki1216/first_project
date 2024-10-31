<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>月送りカレンダー</title>
</head>

<body>
  <div class="container"> 
    <h3>
      <a href="?ym=<?php echo $prev; ?>">&lt;</a> 
      <?php echo $calendar; ?>
      <a href="?ym=<?php echo $next; ?>">&lt;</a>
    </h3>
      <table class="calendar-table">
        <tr>
          <th>日</th>
          <th>月</th>
          <th>火</th>
          <th>水</th>
          <th>木</th>
          <th>金</th>
          <th>土</th>
        </tr>
      </table>    
  </div>
</body>
