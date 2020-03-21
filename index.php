<?php
// 結果を代入する変数
$result = false;

// ポスト変数が存在するか
if (isset($_POST['choice'])) {
    $janken = array(
        'グー',
        'チョキ',
        'パー'
    );

    // エスケープ
    $player = htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');

    // 相手の手をランダムで決定
    $com = $janken[array_rand($janken)];

    // 勝敗判定
    if ($player === 'グー' && $com === 'チョキ') {
        $result = '勝ち';
    } elseif ($player === 'グー' && $com === 'グー') {
        $result = 'あいこ';
    } elseif ($player === 'グー' && $com === 'パー') {
        $result = '負け';
    } elseif ($player === 'チョキ' && $com === 'グー') {
        $result = '負け';
    }elseif ($player === 'チョキ' && $com === 'チョキ') {
      $result = 'あいこ';
    }elseif ($player === 'チョキ' && $com === 'パー') {
      $result = '勝ち';
    }elseif ($player === 'パー' && $com === 'パー') {
      $result = 'ハイタッチ‼︎加納さん２ヶ月間ありがとうございました！Gsサイコー';
    }elseif ($player === 'パー' && $com === 'グー') {
      $result = '勝ち';
    }elseif ($player === 'パー' && $com === 'チョキ') {
      $result = '負け';
    }
    // 以下、チョキとパーのコード省略...
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPでじゃんけんゲーム</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1>じゃんけんゲーム</h1>

<div>
<h2>あなたの手を選んでください</h2>

<form action="" method="post">
    <button type="submit" name="choice" value="グー"><img src="img/gu.png" alt="" height="100px"></button>
    <button type="submit" name="choice" value="チョキ"><img src="img/cyoki.jpg" alt="" height="100px"></button>
    <button type="submit" name="choice" value="パー"><img src="img/pa.jpg" alt="" height="100px"></button>
</form>

<?php if ($result) : ?>
    <h3>結果</h3>

    <p>
    あなた：<?php echo $player; ?><br>
    あいて：<?php echo $com; ?>
    </p>

    <p><?php echo $result; ?>です。</p>
<?php endif; ?>

</div>

</body>
</html>