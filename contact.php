<?php $pageTitle='Contact'; $pageDesc='Get in touch with VGAN. US and Norway offices; wholesale and retailer enquiries at contact@eatvgan.com.'; $page='contact';
require __DIR__.'/lib.php';
include __DIR__.'/partials/header.php';
?>
<section class="sub-hero short">
  <div class="wrap sub-hero-inner">
    <div class="eyebrow accent"><?= tv('contact_hero_eyebrow','SAY HELLO') ?></div>
    <h1><?= tv('contact_hero_h1','GET IN<br><span class="mag">TOUCH</span>') ?></h1>
    <p><?= tv('contact_hero_p','Two offices, one inbox. Here\'s where to find us.') ?></p>
  </div>
</section>

<section class="section">
  <div class="wrap office-grid">
    <div class="office-card">
      <div class="eyebrow accent"><?= tv('contact_us','UNITED STATES') ?></div>
      <h3><?= e($COMPANY['name']) ?></h3>
      <p><?php foreach($COMPANY['addr'] as $l): ?><?= e($l) ?><br><?php endforeach; ?><?= tv('country_us','United States') ?></p>
      <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>
    </div>
    <div class="office-card">
      <div class="eyebrow accent"><?= tv('contact_no','NORWAY') ?></div>
      <h3>VGAN AS</h3>
      <p>Rosenholmveien<br>1252 Oslo<br><?= tv('country_no','Norway') ?></p>
      <a href="tel:+4792630304">+47 9263 0304</a>
      <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>
    </div>
  </div>
  <div class="wrap">
    <div class="wholesale-note">
      <div class="eyebrow accent"><?= tv('contact_ws_label','RETAILERS &amp; WHOLESALE') ?></div>
      <p><?= tv('contact_ws_pre','Want to stock VGAN? Send wholesale and retailer requests to ') ?><a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a> <?= tv('contact_ws_post'," and we'll get right back to you.") ?></p>
    </div>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>
