<?php
$color = $_COOKIE['color'] ?? null;
$options = ['light', 'dark'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = $_POST['color'];
    setcookie('color', $color, time() + 60 + 60,
              '/', '', false, true);
}

// 색상이 유효한 옵션이면 그것을 사용 - 그렇지 않으면 dark 사용
$scheme = (in_array($color, $options) ? $color : 'dark');
?>
<?php include 'includes/header-style-switcher.php'; ?> 
  <form method="POST" action="cookie-preferences.php"> 
    Select color scheme:
    <select name="color">
      <option value="dark">Dark</option>
      <option value="light">Light</option>
    </select><br>
    <input type="submit" value="Save">
  </form>
<?php include 'includes/footer.php'; ?>