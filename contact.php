<?php $pageTitle='Contact'; $page='contact';
require __DIR__.'/lib.php';
include __DIR__.'/partials/header.php';
?>
<section class="sub-hero short">
  <div class="wrap sub-hero-inner">
    <div class="eyebrow accent">SAY HELLO</div>
    <h1>GET IN<br><span class="mag">TOUCH</span></h1>
    <p>Two offices, one inbox. Here's where to find us.</p>
  </div>
</section>

<section class="section">
  <div class="wrap office-grid">
    <div class="office-card">
      <div class="eyebrow accent">UNITED STATES</div>
      <h3><?= e($COMPANY['name']) ?></h3>
      <p><?php foreach($COMPANY['addr'] as $l): ?><?= e($l) ?><br><?php endforeach; ?>United States</p>
      <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>
    </div>
    <div class="office-card">
      <div class="eyebrow accent">NORWAY</div>
      <h3>VGAN AS</h3>
      <p>Rosenholmveien<br>1252 Oslo<br>Norway</p>
      <a href="tel:+4792630304">+47 9263 0304</a>
      <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>
    </div>
  </div>

  <div class="wrap">
    <div class="wholesale-note">
      <div class="eyebrow accent">RETAILERS &amp; WHOLESALE</div>
      <p>Want to stock VGAN? Send wholesale and retailer requests to <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a> and we'll get right back to you.</p>
    </div>
  </div>
</section>

<?php include __DIR__.'/partials/footer.php'; ?>
