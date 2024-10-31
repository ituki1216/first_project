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

    <?php
      // カレンダー表示用のphpをインクルード
      include 'app.php';
      
      // 現在の都市と月を取得
      $month = date('n'); 
      $year = date('y');

      // カレンダー表示
      render_calendar($month, $year);
    ?>
  </div>
</body>
</html>
