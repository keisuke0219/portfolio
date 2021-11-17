<?php
// $to = "to@nakou9139@icloud.com";
// $subject = "TEST";
// $message = "This is TEST.\r\nHow are you?";
// $headers = "From: from@example.com";
// mb_send_mail($to, $subject, $message, $headers);

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["tel"];
$content = $_POST["content"];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <link href="/your-path-to-fontawesome/css/style.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="script.js"></script>
  
</script>
</head>


<h2 class="sec-title">内容確認</h2>
<div class="confirm-box">
  <p>お名前 <?php echo $name ?></p>
  <p>メールアドレス <?php echo $email ?></p>
  <p>電話番号<?php echo $number ?></p>
  <p>内容<?php echo $content ?></p>
    <form action="submit.php" method="post" name="form" onsubmit="return validate()">
      <input type="hidden" name="name" value="<?php echo $name ?>">
      <input type="hidden" name="email" value="<?php echo $email ?>">
      <button type="submit">送信</button>
    </form>
</div>
</div>
</html>