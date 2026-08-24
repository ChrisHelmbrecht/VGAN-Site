<footer class="site-foot"><div class="wrap foot-grid">
  <div class="foot-brand">
    <?= logo_html('foot') ?>
    <p class="foot-tag"><?= e($BRAND['tagline']) ?>. <?= tv('foot_tag2','Premium organic dairy-free chocolate.') ?></p>
    <a class="ig" <?= ext($BRAND['instagram']) ?> aria-label="Instagram">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.3" cy="6.7" r="1.1" fill="currentColor" stroke="none"/></svg>
      <span>@vganchocolate</span>
    </a>
  </div>
  <nav class="foot-links">
    <a href="index.php#bars"><?= tv('foot_bars','The bars') ?></a>
    <a href="story.php"><?= tv('foot_story','Our story') ?></a>
    <a href="environment.php"><?= tv('foot_sustainability','Sustainability') ?></a>
    <a href="where-to-buy.php"><?= tv('foot_wtb','Where to buy') ?></a>
    <a href="contact.php"><?= tv('foot_contact','Contact') ?></a>
    <a <?= ext($BRAND['amazon']) ?>><?= tv('foot_shop','Shop on Amazon') ?></a>
  </nav>
  <div class="foot-company">
    <strong><?= e($COMPANY['name']) ?></strong><br>
    <?php foreach($COMPANY['addr'] as $l): ?><?= e($l) ?><br><?php endforeach; ?>
    <a href="mailto:<?= e($COMPANY['email']) ?>"><?= e($COMPANY['email']) ?></a>
  </div>
</div>
<div class="wrap foot-legal">
  <span>&copy; <?= date('Y') ?> <?= e($COMPANY['name']) ?>. <?= tv('foot_made','Made with joyful rebellion.') ?></span>
  <span class="foot-legal-links"><?= lang_switcher('langsw foot') ?> <a href="privacy.php"><?= tv('foot_privacy','Privacy') ?></a> &middot; <a href="terms.php"><?= tv('foot_terms','Terms') ?></a> &middot; <a href="contact.php"><?= tv('foot_contact2','Contact') ?></a></span>
</div>
</footer>
<div class="cookie-banner" id="cookieBanner" hidden>
  <p><?= tv('cookie_text',"We use cookies to run this site and to understand how it\'s used. You can accept these, or keep only the essential ones.") ?> <a href="privacy.php"><?= tv('cookie_more','Learn more') ?></a></p>
  <div class="cookie-btns">
    <button id="cookieDecline" class="btn ghost"><?= tv('cookie_decline','Only essential') ?></button>
    <button id="cookieAccept" class="btn"><?= tv('cookie_accept','Accept all') ?></button>
  </div>
</div>
<script>
(function(){
  var b=document.getElementById('cookieBanner'); if(!b) return;
  var has=document.cookie.split('; ').some(function(r){return r.indexOf('cookie_consent=')===0;});
  if(!has) b.hidden=false;
  function set(v){ document.cookie='cookie_consent='+v+';path=/;max-age=31536000'; b.hidden=true; }
  document.getElementById('cookieAccept').addEventListener('click',function(){set('yes');});
  document.getElementById('cookieDecline').addEventListener('click',function(){set('no');});
})();
</script>
</body>
</html>
