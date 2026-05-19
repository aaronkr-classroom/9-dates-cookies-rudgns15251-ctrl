<?php
session_start();
$counter = $_SESSION['counter'] ?? 0;
$counter = $counter + 1;
$_SESSION['counter'] = $counter;

$message = 'Page views: ' . $counter;
?>
<?php include 'includes/header.php'; ?>

<h1>Welcome</h1>
<p><?= $message ?></p>

<h2>Cookies</h2>
<pre>
<?php var_dump($_COOKIE); ?>
</pre>

<h2>Session</h2>
<pre>
<?php var_dump($_SESSION); ?>
</pre>

<?php include 'includes/footer.php'; ?>
