<?php
// じゃんけんの手
  $hands = array('グー', 'チョキ', 'パー');

// プレイヤーが選んだ手がPOSTされたら
  if(isset($_POST['playerHand'])) {
    // プレイヤーが選んだ手
    $playerHand = $_POST['playerHand'];

    // PCの手
    $key = array_rand($hands);
    $pcHand = $hands[$key];

    if($playerHand == $pcHand) {
      $result = 'あいこ';
    } elseif($playerHand == 'グー' && $pcHand == 'チョキ') {
      $result = '勝ち';
    } elseif($playerHand == 'チョキ' && $pcHand == 'パー') {
      $result = '勝ち';
    } elseif($playerHand == 'パー' && $pcHand == 'グー') {
      $result = '勝ち';
    } else {
      $result = '負け';
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div id="wrapper">
      <header>
        <div class="header-logo">じゃんけんプログラム</div>
      </header>

      <main>
        <h1>結果は・・・</h1>
        <div class="result-box">
          <p class="result-word"><?= $result ?>!</p>

          あなた：<?= $playerHand ?><br>
          コンピューター：<?= $pcHand ?><br>

          <p>
            <a class="red" href="index.php">>>もう一回勝負する</a>
          </p>
        </div>
      </main>

      <footer>
        <small>PHP練習。</small>
      </footer>
    </div>
  </body>
</html>