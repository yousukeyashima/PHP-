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
        <h1>じゃんけん</h1>
        出す手を選んで勝負してください。
        <div class="form-box">
          <!-- battle.phpに手を送信 -->
          <form action="battle.php" method="post">
            <label>
              <input type="radio" title="playerHand" name="playerHand" value="グー" checked>グー
            </label>
            <label>
              <input type="radio" title="playerHand" name="playerHand" value="チョキ">チョキ
            </label>
            <label>
              <input type="radio" title="playerHand" name="playerHand" value="パー">パー
            </label>
            <button type="submit" class="battle-button">勝負！</button>
          </form>
      </main>

      <footer>
        <small>PHP練習。</small>
      </footer>
    </div>
  </body>
</html>