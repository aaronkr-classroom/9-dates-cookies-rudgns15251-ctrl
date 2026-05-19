<?php
$tz_LDN = new DateTimeZone('Europe/London');
$tz_SEO = new DateTimeZone('Asia/Seoul');
$location = $tz_LDN->getLocation();

$LDN    = new DateTime('now', $tz_LDN);
$SEO    = new DateTime('now', $tz_SEO);
$SYD    = new DateTime('now', 
               new DateTimeZone('Australia/Sydney'));
?>
<?php include 'includes/header.php'; ?> 

<p><b>LDN: <?= $LDN->format('g:i a') ?></b> 
   (<?= ($LDN->getOffset() / (60 * 60)) ?>)<br>
   <b>TYO: <?= $TYO->format('g:i a') ?></b>
   (<?= ($TYO->getOffset() / (60 * 60)) ?>)<br>
   <b>SYD: <?= $SYD->format('g:i a') ?></b>
   (<?= ($SYD->getOffset() / (60 * 60)) ?>)<br></p>

<h1>Head Office</h1>
<p><?= $tz_LDN->getName() ?><br>
  <b>Longitude:</b> <?= $location['longitude'] ?><br>
  <b>Latitude:</b>  <?= $location['latitude'] ?></p>	

<pre>
  <?php var_dump($_COOKIE);?>
</pre>

<?php include 'includes/footer.php'; ?>