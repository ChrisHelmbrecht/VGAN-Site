<footer class="site-foot"><div class="wrap foot-grid">
  <div class="foot-brand">
    <?= logo_html('foot') ?>
    <p class="foot-tag"><?= e($BRAND['tagline']) ?>. Premium organic dairy-free chocolate.</p>
    <a class="ig" <?= ext($BRAND['instagram']) ?> aria-label="Instagram">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.3" cy="6.7" r="1.1" fill="currentColor" stroke="none"/></svg>
      <span>@vganchocolate</span>
    </a>
  </div>
  <nav class="foot-links">
    <a href="index.php#bars">The bars</a>
    <a href="story.php">Our story</a>
    <a href="environment.php">Sustainability</a>
    <a href="where-to-buy.php">Where to buy</a>
    <a <?= ext($BRAND['amazon']) ?>>Shop on Amazon</a>
  </nav>
  <div class="foot-company">
    <strong><?= e($COMPANY['name']) ?></strong><br>
    <?php foreach($COMPANY['addr'] as $l): ?><?= e($l) ?><br><?php endforeach; ?>
    <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>
  </div>
</div>
<div class="wrap foot-legal">&copy; <?= date('Y') ?> <?= e($COMPANY['name']) ?>. Made with joyful rebellion.</div>
</footer>
</body>
</html>
