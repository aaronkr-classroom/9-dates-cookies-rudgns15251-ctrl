<?php
$counter = $_COOKIE['counter'] ?? 0; // 데이터 가져오기
$counter = $counter + 1;             // 카운터에 +1
setcookie('counter', $counter);      // 쿠키 업데이트

$message = 'Page views: ' . $counter; // 메시지
?>
<?php include 'includes/header.php'; ?>
?>
<?php include 'includes/header.php'; ?> 

<h1>Welcome</h1>
<p><?= $message ?></p>

<pre>
  <?php var_dump($_COOKIE);?>
</pre>

<?php include 'includes/footer.php'; ?> 